# MimeMap

[![Build Status](https://secure.travis-ci.org/FileEye/MimeMap.png?branch=master)](https://travis-ci.org/FileEye/MimeMap)

A PHP library to work with MIME types and their related file extensions.


## Features

- Map file extensions to MIME types and vice-versa
- Parse MIME types
- Supports full [RFC 2045](https://www.ietf.org/rfc/rfc2045.txt) specification
- Provides utility functions for working with and determining info about types
- Automatically update the mapping between MIME types and file extensions from the
  most [authoritative source](http://svn.apache.org/viewvc/httpd/httpd/trunk/docs/conf/mime.types?view=co)


## Installation

```
$ composer require fileeye/mimemap
```


## Usage


## Development


### Updating extension mapping

The built-in extension-to-type mapping list can be updated from apache's source
code repository:

```
    $ ./scripts/update-mimelist.php
    ...
    785 new, 28 updated, 168 same, 5 own, 986 total
    Code updated
```

The file ```src/Extension.php``` will be changed now.


## Credits

MimeMap is a fork of PEAR's [MIME_Type](https://github.com/pear/MIME_Type) package.
See all the [original contributors](https://github.com/pear/MIME_Type/graphs/contributors).

Note that in comparison with PEAR's MIME_Type, this library has a different scope,
mainly focused on finding the mapping between each MIME type and its generally
accepted file extensions.
All the features that allow detecting the MIME type of a file are removed. The
[symfony/http-foundation](https://github.com/symfony/http-foundation) library and its
[MimeTypeGuesser](https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/MimeType/MimeTypeGuesser.html) API are the suggested components to cover that use case.
