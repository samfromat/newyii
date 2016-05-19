<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
   // public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@bower/corlate/';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.min.css',
        'css/prettyPhoto.css',
        'css/main.css'
    ];
    public $js = [
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/jquery.prettyPhoto.js',
        'js/main.js',
        'js/wow.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
