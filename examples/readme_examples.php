<?php
/**
 * Examples for the README file.
 */

use FileEye\MimeMap\Type;
use FileEye\MimeMap\Extension;

require_once __DIR__ . '/../vendor/autoload.php';

// -------------------

$type = new Type('image/jpeg');

print_r($type->getExtensions());
// will return ['jpeg', 'jpg', 'jpe']

print_r($type->getDefaultExtension());
// will return 'jpeg'

// -------------------

// When passing an alias to a MIME type, the API will
// return the extensions to the parent type:
$type = new Type('image/pdf');

print_r($type->getDefaultExtension());
// will return 'pdf' which is the default extension for 'application/pdf'

$ext = new Extension('wmz');

print_r($ext->getTypes());
// will return ['application/x-msmetafile', 'application/x-ms-wmz']

print_r($ext->getDefaultType());
// will return 'application/x-msmetafile'

// -------------------

$type = new Type('text / (Unstructured text)  plain  ; charset = (UTF8, not ASCII) utf-8');
$type->addParameter('lang', 'it', 'Italian');

echo $type->toString(Type::SHORT_TEXT);
// will print 'text/plain'

echo $type->toString(Type::FULL_TEXT);
// will print 'text/plain; charset="utf-8"; lang="it"'

echo $type->toString(Type::FULL_TEXT_WITH_COMMENTS);
// will print 'text/plain (Unstructured text); charset="utf-8" (UTF8, not ASCII), lang="it" (Italian)'

// -------------------

$type = new Type('text/html');

$type_desc = $type->getDescription();
$type->setSubTypeComment($type_desc);
echo $type->toString(Type::FULL_TEXT_WITH_COMMENTS);
// will print 'text/html (HTML document)'

// Setting the $strict parameter of getDescription to true
// will extend the description to include the meaning of the acronym
$type_desc = $type->getDescription(true);
$type->setSubTypeComment($type_desc);
echo $type->toString(Type::FULL_TEXT_WITH_COMMENTS);
// will print 'text/html (HTML document, HTML: HyperText Markup Language)'
