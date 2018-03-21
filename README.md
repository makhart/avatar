![](http://i.imgur.com/wQ4TxR7.png)

# Avatar [![Source](https://img.shields.io/badge/library-makhart/avatar-blue.svg?style=flat-square)](https://github.com/makhart/avatar) [![Version](https://img.shields.io/packagist/v/makhart/avatar.svg?style=flat-square)](https://packagist.org/packages/makhart/avatar) [![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/makhart/avatar/blob/master/LICENSE.md) [![Build](https://travis-ci.org/makhart/avatar.svg?branch=master)](https://travis-ci.org/makhart/avatar) [![Coverage](https://coveralls.io/repos/github/makhart/avatar/badge.svg?branch=master)](https://coveralls.io/github/makhart/avatar?branch=master) [![Downloads](https://img.shields.io/packagist/dt/makhart/avatar.svg?style=flat-square)](https://packagist.org/packages/makhart/avatar)

> Tinygraphs is an avatar generator web service. Use it to generate avatars for your web app. Images are based on different geometric shapes and patterns: squares, triangles, ... Images can have 2 to 4 colors from a set of color palettes. Use Tinygraphs to generate avatars and banners for your users and websites.

This [PHP](https://secure.php.net) library is a wrapper for the [www.tinygraphs.com](http://www.tinygraphs.com/)

More information: [/taironas/tinygraph](https://github.com/taironas/tinygraphs)

## Requirements
* PHP >=7.1

## Installation
You can use the preferred method via [Composer](https://getcomposer.org) & [Packagist](https://packagist.org). Run the following command:
````bash
composer require makhart/avatar
````

Or add it as a requirement to your project's composer.json:
````php
"require": {
    "makhart/avatar": "^1.0.0"
},
````

## Usage

### Basic use of the library
````php
use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();
````

## Examples

### Save
````php
use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setName('Makhart');
    $image = $avatar->setShape('squares');
    $image = $avatar->setTheme('heatwave');
    $image = $avatar->setNumberColors('4');
    $image = $avatar->setSize('50');
    $image = $avatar->setPath('../resources/avatars/');
    $image = $avatar->setFileName('makhart');
    $image = $avatar->setExtension('svg');

    $image = $avatar->save();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}

# Save: ../resources/avatars/makhart.svg
````

### Rename
````php
use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setPath('../resources/avatars/');
    $image = $avatar->setFileName('makhart');
    $image = $avatar->setNewFileName('trahkam');

    $image = $avatar->rename();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}

# Rename: ../resources/avatars/{makhart.svg}->{trahkam.svg}
````

### Delete
````php
use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setPath('../resources/avatars/');
    $image = $avatar->setFileName('makhart');
    $image = $avatar->setExtension('svg');

    $image = $avatar->delete();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}

# Delete: ../resources/avatars/makhart.svg
````

### Get url
````php
use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setName('Makhart');
    $image = $avatar->setShape('squares');
    $image = $avatar->setTheme('heatwave');
    $image = $avatar->setNumberColors('4');
    $image = $avatar->setSize('50');
    $image = $avatar->setExtension('svg');

    $image = $avatar->getUrl();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}

# Returns: http://www.tinygraphs.com/squares/Makhart?theme=heatwave&numcolors=4&size=50&fmt=svg
````

### Get src
````php
use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setPath('../resources/avatars/');
    $image = $avatar->setFileName('makhart');
    $image = $avatar->setExtension('svg');

    $image = $avatar->getSrc();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}

# Returns: ../resources/avatars/makhart.svg
````

### Get html
````php
use Makhart\Avatar\Avatar;

require 'vendor/autoload.php';

$avatar = new Avatar();

try {
    $image = $avatar->setPath('../resources/avatars/');
    $image = $avatar->setFileName('makhart');
    $image = $avatar->setExtension('svg');

    $image = $avatar->getHtml();
} catch (Exception $e) {
    echo 'Error: ' . $e;
}

# Returns: <img src="../resources/avatars/makhart.svg">
````

## Documentation

### Available methods
* setName('name')
* setShape('shape')
* setTheme('theme')
* setNumberColors('number colors')
* setSize('size')
* setExtension('extension')
* setPath('path')
* setFileName('file name')
* setNewFileName('new file name')
* save()
* rename()
* delete()
* getUrl()
* getSrc()
* getHtml()
* getName()
* getShape()
* getTheme()
* getNumberColors()
* getSize()
* getPath()
* getFileName()
* getExtension()
* getNewFileName()

### Available names
* {Your avatar name}

### Available shapes
* squares
* isogrids
* spaceinvaders
* labs/isogrids/hexa
* labs/isogrids/hexa16

### Available themes
* frogideas
* sugarsweets
* heatwave
* daisygarden
* seascape
* summerwarmth
* bythepool
* duskfalling
* berrypie
* base

### Available number colors
* 2
* 3
* 4

### Available sizes
* {Your avatar size} (max int: 999)

### Available paths
* {Your avatar location}

### Available file names
* {Your file name}

### Available extensions
* svg
* jpg

### Available new file names
* {Your new file name}

## License
Please see [LICENSE](https://github.com/makhart/avatar/blob/master/LICENSE.md) for more information.

## Contributing
Please submit bug reports, suggestions and pull requests to the GitHub issue tracker.

## Changelog
Please see [CHANGELOG](https://github.com/makhart/avatar/blob/master/CHANGELOG.md) for more information.

