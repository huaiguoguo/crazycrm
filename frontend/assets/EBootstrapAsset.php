<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/11/28
 * Time: 22:06
 */

namespace frontend\assets;


use yii\bootstrap\BootstrapAsset;

class EBootstrapAsset extends BootstrapAsset
{
    //下面是增加的代码
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap-theme.css',
    ];

    public $js = [
        'js/bootstrap.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}