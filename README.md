# MimeMap
A PHP library to work with MIME types and file extensions.

MimeMap is a fork of [PEAR MIME_Type](https://github.com/pear/MIME_Type). See all
the [contributors](https://github.com/pear/MIME_Type/graphs/contributors).

Note that in comparison with PEAR MIME_Type, all the file MIME type detection
features are removed. For this, it is suggested to use [symfony/http-foundation](https://github.com/symfony/http-foundation) and its [MimeTypeGuesser](https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/MimeType/MimeTypeGuesser.html) API.


## Features

- Map file extensions to MIME types and vice-versa
- Parse MIME types
- Supports full [RFC 2045](https://www.ietf.org/rfc/rfc2045.txt) specification
- Provides utility functions for working with and determining info about types


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

The file ```MIME/Type/Extension.php``` will be changed now.
