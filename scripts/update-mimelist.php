#!/usr/bin/env php
<?php
/**
 * The apache httpd project contains the most-complete list
 * of file extension to mime type mapping on the planet.
 * We use it to update our own list.
 */
$url = 'http://svn.apache.org/viewvc/httpd/httpd/trunk/docs/conf/mime.types?view=co';
if ($argc >= 2) {
    $url = $argv[1];
}

//which MIME type to choose if an extension has several
$duplicateResolution = array(
    'sub' => 'text/vnd.dvb.subtitle',
    'wmz' => 'application/x-msmetafile',
);

$map  = loadMapFromUrl($url);
$map  = addExistingMap($map);
$code = generateCodeFromMap($map);
writeCode($code);

function writeCode($code)
{
    $file = __DIR__ . '/../MIME/Type/Extension.php';
    $new = preg_replace(
        '#public \$extensionToType = array\(.+?\);#s',
        "public \$extensionToType = array(\n"
        . $code
        . "    );",
        file_get_contents($file)
    );
    file_put_contents($file, $new);
    logMsg('Code updated');
}

/**
 * Generate PHP source code suitable for a class property array definition
 *
 * @return string PHP code for array($code)
 */
function generateCodeFromMap($map)
{
    asort($map);
    $lens = array_map(
        function($value) {
            return strlen($value);
        },
        array_keys($map)
    );
    $maxlen = max($lens);

    $code = '';
    foreach ($map as $ext => $type) {
        $code .= sprintf(
            "        %s=> '%s',\n",
            str_pad("'" . $ext . "'", $maxlen + 2),
            $type
        );
    }
    return $code;
}

function addExistingMap($map)
{
    require_once __DIR__ . '/../MIME/Type/Extension.php';
    $mte = new MIME_Type_Extension();

    $new = count($map);
    $own = 0;
    $same = 0;
    $updated = 0;
    foreach ($mte->extensionToType as $ext => $type) {
        if (isset($map[$ext])) {
            --$new;
            if ($map[$ext] != $type) {
                logMsg(
                    sprintf(
                        'Update: %s changed from %s to %s',
                        $ext, $type, $map[$ext]
                    )
                );
                ++$updated;
            } else {
                ++$same;
            }
        } else {
            $map[$ext] = $type;
            logMsg("Added existing own type: $ext for $type");
            ++$own;
        }
    }

    logMsg(
        sprintf(
            '%d new, %d updated, %d same, %d own, %d total',
            $new, $updated, $same, $own, count($map)
        )
    );
    return $map;
}

/**
 * @return array Key is the file extension, value is the MIME type.
 *               Unsorted.
 */
function loadMapFromUrl($url)
{
    global $duplicateResolution;

    $map = array();
    $lines = file($url);
    if ($lines === false) {
        logMsg('Error loading URL: ' . $url);
        exit(2);
    }
    foreach ($lines as $line) {
        if ($line{0} == '#') {
            continue;
        }
        $line = preg_replace("#\\s+#", ' ', trim($line));
        $parts = explode(' ', $line);
        $type = array_shift($parts);
        $extensions = $parts;
        foreach ($extensions as $ext) {
            if (isset($map[$ext])) {
                if (isset($duplicateResolution[$ext])) {
                    //force the type to our wishes
                    $type = $duplicateResolution[$ext];
                } else {
                    logMsg(
                        sprintf(
                            'Duplicate extension: %s for %s and %s',
                            $ext, $map[$ext], $type
                        )
                    );
                    logMsg('Add it to $duplicateResolution array');
                    exit(1);
                }
            }
            $map[$ext] = $type;
        }
    }
    return $map;
}

function logMsg($msg)
{
    file_put_contents('php://stderr', $msg . "\n");
}

?>