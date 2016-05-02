<?php

namespace mati\uniteGallery;

use yii\base\Widget;

class UniteGallery extends Widget 
{

    public function init() 
	{
        $this->registerClientScript();
    }

    /**
     * @inheritdoc
     */
    public function run() 
	{
        $view = $this->getView();

    }

    public function registerClientScript() 
	{
        $view = $this->getView();

        UniteGallerAsset::register($view);
    }
}


?>