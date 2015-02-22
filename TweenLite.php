<?php

namespace claudejanz\gsap;

use yii\helpers\Json;

/**
 * This is just an example.
 */
class TweenLite extends TweenWidget {

    
    public static function to($target,$time,$options){
        $view = self::$_view;
        $view->registerJs('TweenLite.to(\''.$target.'\','.$time.','.  Json::encode($options).');');
    }
    public static function from($target,$time,$options){
        $view = self::$_view;
        $view->registerJs('TweenLite.from(\''.$target.'\','.$time.','.  Json::encode($options).');');
    }

    
    

}
