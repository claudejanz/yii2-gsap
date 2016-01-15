<?php

namespace claudejanz\gsap;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class AssetGsapLite extends AssetBundle
{
   public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public $sourcePath = '@bower/gsap/src/minified';
    
    public $js = [
        //'minified/jquery.gsap.min.js',
        'TweenLite.min.js',
        'TimelineLite.min.js',
    ];
}
