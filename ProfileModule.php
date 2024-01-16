<?php

namespace copoka\profile;
use Yii;

class ProfileModule extends \yii\base\Module
{
    public $defaultRoute="profile/index";
    public $controllerNamespace = 'copoka\profile\controllers';
    public $defaultRole = 'member';
    public $isActivation = true;
    public $profiles = [];
    public $bundleInstance = null;

    public function init()
    {
        parent::init();        
        Yii::setAlias('profile', '@vendor/copoka/yii2-profile'); 
        
        $this->registerAssets();
    }
    
    public function registerAssets() 
    {
        $view = Yii::$app->view; 
        Yii::$app->assetManager->forceCopy = true;
        $this->bundleInstance = ProfileAsset::register($view); 
        $this->bundleInstance->publish(Yii::$app->assetManager);
  	}
}
