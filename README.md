wordcolor
========
[![Build Status](https://img.shields.io/travis/lichunqiang/wordcolor.svg?style=flat-square)](http://travis-ci.org/lichunqiang/wordcolor)
[![version](https://img.shields.io/packagist/v/light/wordcolor.svg?style=flat-square)](https://packagist.org/packages/light/wordcolor)
[![Download](https://img.shields.io/packagist/dt/light/wordcolor.svg?style=flat-square)](https://packagist.org/packages/light/wordcolor)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/lichunqiang/wordcolor.svg?style=flat-square)](https://scrutinizer-ci.com/g/lichunqiang/wordcolor)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/lichunqiang/wordcolor.svg?style=flat-square)](https://scrutinizer-ci.com/g/lichunqiang/wordcolor)
[![Contact](https://img.shields.io/badge/weibo-@chunqiang-blue.svg?style=flat-square)](http://weibo.com/chunqiang)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist light/wordcolor "~1.0.0"
```

or add

```
"light/wordcolor": "~1.0.0"
```

to the require section of your `composer.json` file.

Usage
-----

```
echo WordColor::trans('word'); // rgb(188,174,18)
```



Tests
-----

```
$ composer test
```

Change Log
----------

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

License
-------
[![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

