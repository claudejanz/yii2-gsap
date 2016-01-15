<?php

namespace claudejanz\gsap;

use yii\helpers\Json;

/**
 * This is just an example.
 */
class TweenLite extends TweenWidget {

    public function __construct($config = []) { 
        parent::init();
        $this->setJs('var ' . $this->id . ' = new TweenLite('.Json::encode($config).');');
    }

    public function to($target, $time, $options) {
        $this->setJs('var ' . $this->id . ' = TweenLite.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
    }

    public function from($target, $time, $options) {
        $this->setJs('var ' . $this->id . ' = TweenLite.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
    }
    
   


}
