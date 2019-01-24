# MimeMap

[![Build Status](https://secure.travis-ci.org/FileEye/MimeMap.png?branch=master)](https://travis-ci.org/FileEye/MimeMap)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/FileEye/MimeMap/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/FileEye/MimeMap/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/FileEye/MimeMap/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/FileEye/MimeMap/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/fileeye/mimemap/v/stable)](https://packagist.org/packages/fileeye/mimemap)
[![Total Downloads](https://poser.pugx.org/fileeye/mimemap/downloads)](https://packagist.org/packages/fileeye/mimemap)
[![Latest Unstable Version](https://poser.pugx.org/fileeye/mimemap/v/unstable)](https://packagist.org/packages/fileeye/mimemap)
[![License](https://poser.pugx.org/fileeye/mimemap/license)](https://packagist.org/packages/fileeye/mimemap)

A PHP library to handle MIME Content-Type fields and their related file extensions.


## Features

- Parse MIME types
- Supports full [RFC 2045](https://www.ietf.org/rfc/rfc2045.txt) specification
- Provides utility functions for working with and determining info about types
- Map file extensions to MIME types and vice-versa
- Automatically update the mapping between MIME types and file extensions from the
  most authoritative sources available, [Apache's documentation](http://svn.apache.org/viewvc/httpd/httpd/trunk/docs/conf/mime.types?view=log)
  and the [freedesktop.org project](http://freedesktop.org).


## Credits

MimeMap is a fork of PEAR's [MIME_Type](https://github.com/pear/MIME_Type) package.
See all the [original contributors](https://github.com/pear/MIME_Type/graphs/contributors).

Note that in comparison with PEAR's MIME_Type, this library has a different scope,
mainly focused on finding the mapping between each MIME type and its generally
accepted file extensions.
All the features that allow detecting the MIME type of a file are removed. The
[symfony/http-foundation](https://github.com/symfony/http-foundation) library and its
[MimeTypeGuesser](https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/MimeType/MimeTypeGuesser.html)
API are the suggested components to cover that use case.


## Installation

```
$ composer require fileeye/mimemap
```


## Usage

1. You have a MIME type, and want to get the file extensions normally associated
to it:

```php
use FileEye\MimeMap\Type;
...

    $type = new Type('image/jpeg');

    $type_extensions = $type->getExtensions();
    // will return ['jpeg', 'jpg', 'jpe']

    $default_extension = $type->getDefaultExtension();
    // will return 'jpeg'
```

2. Viceversa, you have a file extensions, and want to get the MIME type normally
associated to it:

```php
use FileEye\MimeMap\Extension;
...

    $ext = new Extension('wmz');

    $ext_types = $ext->getTypes();
    // will return ['application/x-msmetafile', 'application/x-ms-wmz']

    $default_type = $ext->getDefaultExtension();
    // will return 'application/x-msmetafile'
```

3. You have a raw MIME Content-Type string and want to add a parameter:

```php
use FileEye\MimeMap\Type;
...

    $type = new Type('text / (Unstructured text)  plain  ; charset = (UTF8, not ASCII) utf-8');
    $type->addParameter('lang', 'it', 'Italian');

    echo $type->toString(Type::SHORT_TEXT);
    // will print 'text/plain'

    echo $type->toString(Type::FULL_TEXT);
    // will print 'text/plain; charset="utf-8"; lang="it"'

    echo $type->toString(Type::FULL_TEXT_WITH_COMMENTS);
    // will print 'text/plain (Unstructured text); charset="utf-8" (UTF8, not ASCII), lang="it" (Italian)'
```

4. You have a MIME Content-Type string and want to the type's description as a comment:

```php
use FileEye\MimeMap\Type;
...

    $type = new Type('text/html');

    $type_desc = $type->getDescription();
    $type->setSubTypeComment($type_desc);
    echo $type->toString(Type::FULL_TEXT_WITH_COMMENTS);
    // will print 'text/html (HTML document)'

    $type_desc = $type->getDescription(true);
    $type->setSubTypeComment($type_desc);
    echo $type->toString(Type::FULL_TEXT_WITH_COMMENTS);
    // will print 'text/html (HTML document, HTML: HyperText Markup Language)'
```

## Development


### Updating the extension mapping code

The built-in extension-to-type mapping list can be updated from the sources'
code repositories, using the `fileeye-mimemap` utility:

```
$ cd [project_directory]/vendor/bin
$ fileeye-mimemap update
```

By default, the utility fetches a mapping source available from the [Apache's documentation](http://svn.apache.org/viewvc/httpd/httpd/trunk/docs/conf/mime.types?view=co)
website, merges it with another mapping source from the [freedesktop.org project](https://raw.github.com/minad/mimemagic/master/script/freedesktop.org.xml),
then integrates the result with any overrides specified in the
`resources/default_map_build.yml` file, and finally updates the PHP file where
the `\FileEye\MimeMap\Map\DefaultMap` class is stored.

The `--script` and `--class` options allow specifying a different update logic
and a different class file to update. Type
```
$ fileeye-mimemap update --help
```
to get more information.
