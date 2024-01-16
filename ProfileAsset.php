<?php

namespace copoka\profile;
 

class ProfileAsset extends \yii\web\AssetBundle 
{
    public $sourcePath = '@profile/assets'; 
    public $css = [
        'css/profile.css',
    ];
    public $js = [
    ];
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
        
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
