<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        /*'css/style.css',
        'bootstrap/css/font-awesome.min.css',
        'bootstrap/css/bootstrap-theme.css',
        'bootstrap/css/bootstrap.min.css',
        'bootstrap/css/bootstrap.css',
        'bootstrap/css/bootstrap-theme.min.css',
        'bootstrap/css/theme.css',*/
    ];
    public $js = [
        /*'js/script.js',
        'js/jquery.min.js.transferir',
        'js/script.js',
        'bootstrap/js/bootstrap.min.js',
        'bootstrap/js/bootstrap.js',*/
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
