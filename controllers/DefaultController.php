<?php

namespace frontpage\controllers;

use yii\web\Controller;
use frontpage\models\Browser;
use yii;

class DefaultController extends Controller
{
    public $layout = '@frontpage/views/layouts/main';
    public function actionIndex()
    {
        var_dump(Yii::$app->assetManager);
        // For full platform-compliance, we need to know if the request originates
        // from an iPhone or an iPad:
        $i_phone_pad = Browser::iPhone() || Browser::iPad();
        if ($i_phone_pad)
        {
            $background_class = '';
        }
        else
        {
            $background_class = 'background-img-container ';
        }
        
        // The frontpage has sections, which are defined in the below array:
        // the php file for this array is specified in the Module's parameters:        
        $sections = require( Yii::getAlias($this->module->sections) );
        
        // The frontpage requires a number or views. For example for sections,
        // a header and "call_to_action's" . The alias where to find these views
        // may be specified in the Module's parameters: 
        $path_to_views = Yii::getAlias($this->module->views).DIRECTORY_SEPARATOR;
        
        $url_to_imgs = Yii::$app->assetManager->getPublishedUrl('@frontpage/assets/module').DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR;
        $url_to_imgs_reduced = $url_to_imgs.'reduced'.DIRECTORY_SEPARATOR;
            // show the frontpage:
        return $this->render('index', compact(
                'sections',
                'background_class',
                'i_phone_pad',
                'path_to_views',
                'url_to_imgs'
            )
        );
    }
}
