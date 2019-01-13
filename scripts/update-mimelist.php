#!/usr/bin/env php
<?php

use FileEye\MimeMap\Extension;
use FileEye\MimeMap\TypeExtensionMap;
use SebastianBergmann\Comparator\Factory;
use SebastianBergmann\Comparator\ComparisonFailure;
use SebastianBergmann\Diff\Differ;
use SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;

require_once dirname(__FILE__) . '/../vendor/autoload.php';

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
/*$duplicateResolution = [
    'sub' => 'text/vnd.dvb.subtitle',
    'wmz' => 'application/x-msmetafile',
];*/

$map  = loadMapFromUrl($url);
$map  = addExistingMap($map);
writeCode($map);

function writeCode($code)
{
    $file = __DIR__ . '/../src/TypeExtensionMap.php';
    $new = preg_replace(
        '#protected static \$extensionToType = (.+?);#s',
        "protected static \$extensionToType = " . var_export($code, true) . ";",
        file_get_contents($file)
    );
    file_put_contents($file, $new);
    logMsg('Code updated');
}

function addExistingMap($map)
{
    $current_map = (new TypeExtensionMap())->get();
    $factory = new Factory;
    $comparator = $factory->getComparatorFor($current_map, $map);
    $comparator->assertEquals($current_map, $map);
    try {
        $comparator->assertEquals($date1, $date2);
        logMsg('No changes to mapping.');
        exit(0);
    } catch (ComparisonFailure $failure) {
        logMsg('Changes to mapping:');
        $differ = new Differ(new UnifiedDiffOutputBuilder("\n--- Expected\n+++ Actual\n"));
        logMsg($differ->diff($failure->getExpectedAsString(), $failure->getActualAsString()));
    }
    return $map;
}

function loadMapFromUrl($url)
{
    $map = [];
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
            $map['types'][$type][] = $ext;
            $map['extensions'][$ext][] = $type;
        }
    }
    ksort($map['types']);
    ksort($map['extensions']);
    return $map;
}

function logMsg($msg)
{
    file_put_contents('php://stderr', $msg . "\n");
}
