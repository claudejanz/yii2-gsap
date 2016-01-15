<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\gsap;

use yii\helpers\Json;

/**
 * Description of TimelineLite
 *
 * @author Claude
 */
class TimelineLite extends TweenWidget {

    
    public function __construct($config = []) {
        $this->addJs('var ' . $this->id . ' = new TimelineLite('.Json::encode($config).');');
        
    }
    
    

   public function add($target) {
        $this->addJs($this->id . '.add(' . $target . ');');
        return $this;
    }
    public function reverse() {
        $this->addJs($this->id . '.reverse();');
        return $this;
    }
    
}
