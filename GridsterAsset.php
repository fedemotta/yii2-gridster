<?php
/**
 * @copyright Federico Nicolás Motta
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-gridster
 */
namespace fedemotta\gridster;
use yii\web\AssetBundle;

/**
 * Asset for the Gridster JQuery plugin
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class GridsterAsset extends AssetBundle 
{
    public $sourcePath = '@bower/gridster.js'; 

    public $css = [
        'dist/jquery.gridster.css',
    ];

    public $js = [
        'dist/jquery.gridster.with-extras.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}