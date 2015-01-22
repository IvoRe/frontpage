<?php

namespace app\modules\frontpage;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'frontpage\controllers';
    
        // create an alias for this module:
    private $aliases = [
        '@frontpage' => __DIR__ // '@frontpage => app\modules\frontpage'
    ];
    
    /**
     * @var string the alias where the configuration array is located
     * This parameter should be set in the Yii config file.
     */
    public $sections = '@frontpage/defaults/sections.php';
    
    /**
     * @var string the alias where the configuration array is located
     * This parameter should be set in the Yii config file.
     */
    public $views = '@frontpage/defaults/views';

    public function init()
    {
        $this->setAliases( $this->aliases );
        parent::init();
    }
}
