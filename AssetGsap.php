<?php

namespace claudejanz\gsap;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class AssetGsap extends AssetBundle
{
    public $sourcePath = '@bower/gsap/src';
    
    public $js = [
        //'minified/jquery.gsap.min.js',
        'minified/TweenMax.min.js',
    ];
}
