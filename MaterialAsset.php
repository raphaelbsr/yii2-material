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
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons',
        'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'css/material-dashboard.min.css',
    ];
    public $js = [
        'js/popper.min.js',        
        'js/bootstrap-material-design.min.js',
        'js/perfect-scrollbar.jquery.min',
        'js/bootstrap-notify.js',        
        'js/material-dashboard.min.js',     
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
