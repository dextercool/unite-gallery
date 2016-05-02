<?php

/**
 * @package   yii2-password
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2016
 * @version   1.5.3
 */

namespace mati\uniteGallery;

use yii\web\AssetBundle;

class UniteGalleryAsset extends AssetBundle
{
    public $sourcePath = 'assets';

    public $js = ['js/unitegallery.min.js',
				  'themes/grid/ug-theme-grid.js'];
    
    public $css = [
        'css/unite-gallery.css',
		'themes/default/ug-theme-default.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    public function registerAssetFiles($view) {
        //$this->js[] = 'source/jquery.fancybox' . (!YII_DEBUG ? '.pack' : '') . '.js';
        parent::registerAssetFiles($view);
    }
}  

?>