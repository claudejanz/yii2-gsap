<?php

namespace claudejanz\gsap;

use yii\helpers\Json;

/**
 * This is just an example.
 */
class TweenMax extends TweenWidget {

    public function __construct($config = []) { 
        parent::init();
        $this->addJs('var ' . $this->id . ' = new TweenMax('.Json::encode($config).');');
    }

    public function to($target, $time, $options) {
        $this->addJs('var ' . $this->id . ' = TweenMax.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
    }

    public function from($target, $time, $options) {
        $this->addJs('var ' . $this->id . ' = TweenMax.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
    }
    
   


}
