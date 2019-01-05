# MimeMap
A PHP library to work with MIME types and file extensions.

MimeMap is a fork of [PEAR MIME_Type](https://github.com/pear/MIME_Type). See all
the [contributors](https://github.com/pear/MIME_Type/graphs/contributors).


## Features:

- Map file extensions to MIME types and vice-versa
- Parse MIME types
- Supports full RFC 2045 specification
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
