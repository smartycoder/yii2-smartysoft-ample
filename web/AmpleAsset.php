<?php

namespace smartysoft\ample\web;

use yii\helpers\FileHelper;
use yii\web\AssetBundle;


class AmpleAsset extends AssetBundle
{
    public $sourcePath = '@vendor/smartysoft/yii2-smartysoft-ample/assets/';

    public $css = [
        'css/style.min.css',
//        'css/style2.min.css',
//        'libs/morris.js/morris.css',
//        'libs/bootstrap/dist/css/bootstrap.min.css'
        'libs/toastr/build/toastr.min.css',
        'css/icons/material-design-iconic-font/css/materialdesignicons.min.css',
        'css/icons/font-awesome/css/all.min.css'
    ];

    public $js = [
        // 'js/jquery.metisMenu.js',
        // 'js/jquery.slimscroll.min.js',
        // 'js/inspinia.js',
        // 'js/pace.min.js',
//        'libs/jquery/dist/jquery.min.js',
        'libs/popper.js/dist/umd/popper.min.js',
        'libs/morris.js/morris.min.js',
        'libs/toastr/build/toastr.min.js',
        'libs/bootstrap/dist/js/bootstrap.min.js',
        'js/app.min.js',
//        'js/app.init.js',
        'libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
        'extra-libs/sparkline/sparkline.js',
        'js/waves.js',
//        'js/sidebarmenu.js',
        'js/custom.min.js',
        'extra-libs/prism/prism.js'
    ];

    public $depends = [
        // 'rmrevin\yii\fontawesome\AssetBundle',
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
        'imxiangli\ladda\LaddaAsset'
    ];

}