<?php

namespace claudejanz\gsap;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class AssetGsap extends AssetBundle
{
   public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public $sourcePath = '@bower/gsap/src/minified';
    
    public $js = [
        //'minified/jquery.gsap.min.js',
        'TweenMax.min.js',
        'TimelineMax.min.js',
    ];
}
