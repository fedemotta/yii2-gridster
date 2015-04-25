Gridster.js widget for Yii2
===========================
This extension provides the [Gridster.js](https://github.com/ducksboard/gridster.js) integration for the Yii2 framework.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist fedemotta/yii2-gridster "*"
```

or add

```
"fedemotta/yii2-gridster": "*"
```

to the require section of your `composer.json` file.

Usage
-----
Includes Gridster as a dependency of your Asset file.

```php
public $depends = [
...
'fedemotta\gridster\GridsterAsset',
...
];
```
