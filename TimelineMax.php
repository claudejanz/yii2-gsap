<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\gsap;

use yii\helpers\Json;

/**
 * Description of TimelineMax
 *
 * @author Claude
 */
class TimelineMax extends TweenWidget {

    
    public function __construct($config = []) {
        $this->addJs('var ' . $this->id . ' = new TimelineMax('.Json::encode($config).');');
        parent::init();
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
