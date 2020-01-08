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

    public $sourcePath = '@bower/gsap/dist';

    public $js = [
        'gsap.min.js',
    ];
}
