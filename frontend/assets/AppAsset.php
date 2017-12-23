<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $cssOptions = [
        'position' => View::POS_HEAD
    ];

    public $css = [
        'css/site.css',
//        'css/docs.min.css',
//        'css/patch.css',
//        'public/components/editor.md/css/editormd.css'
    ];
    public $jsOptions = [
        'position' => View::POS_END,
    ];
    public $js = [
//        'js/jquery.min.js',
//        'public/components/editor.md/editormd.js'
    ];

    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
        'frontend\assets\EBootstrapAsset',
    ];
}
