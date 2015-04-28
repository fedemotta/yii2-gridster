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
Use Gridster.js as any other other Yii2 widget.

```php
use fedemotta\gridster\Gridster;
```

```php
$gridster = Gridster::begin([
    'options'=>['class'=>'gridster'],
    'clientOptions'=>[
        'widget_margins'=> [10, 10],
        'widget_base_dimensions'=> [140, 140],
        'autogrow_cols'=> false,
        'resize'=>['enabled'=>true]
    ]
]);?>
<?= $gridster->beginWidget([
        'data-row'=>"1", 'data-col'=>"1", 'data-sizex'=>"5", 'data-sizey'=>"2",
    ]);
?>
    <header>Some text</header>
    The widget content
<?=$gridster->endWidget();?>
<?=$gridster->beginWidget([
        'data-row'=>"1", 'data-col'=>"1", 'data-sizex'=>"4", 'data-sizey'=>"1",
    ]);
?>
    <header>Some other text</header>
    The other widget content
<?=$gridster->endWidget();?>
<?php 
Gridster::end();
```

You can also use Gridster.js in the JavaScript layer of your application. To achieve this, you need to include Gridster as a dependency of your Asset file.

```php
public $depends = [
...
'fedemotta\gridster\GridsterAsset',
...
];
```
