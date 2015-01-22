<?php
namespace frontpage\assets;

use yii\web\AssetBundle;


class ModuleAsset extends AssetBundle
{
    public $sourcePath = '@frontpage/assets/module';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    
    public $css = [
        'css/style.css',
    ];
    public $js = [
        '//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js',
        'js/jquery.front.plugin.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset', 
        //'yii\bootstrap\BootstrapAsset',
    ];
}
