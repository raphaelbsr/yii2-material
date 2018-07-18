<?php

namespace raphaelbsr\material;

use yii\web\AssetBundle;

/**
 * Description of MaterialAsset
 *
 * @author rapha
 */
class MaterialAsset extends AssetBundle {

    public $sourcePath = '@vendor/raphaelbsr/yii2-material/assets';
    public $css = [
        'https://fonts.googleapis.com/css?family=Montserrat:400,700,200',
        'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'css/bootstrap.min.css',
        'css/paper-dashboard.min.css',
    ];
    public $js = [
        'js/pooper.min.js',
        'js/bootstrap.min.js',
        'js/bootstrap-notify.js',
        'js/perfect-scrollbar.jquery.min',
        'js/paper-dashboard.min.js',
//        'js/material.min.js',
//        'js/chartist.min.js',
//        'js/superfish.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init() {
        parent::init();
    }

}
