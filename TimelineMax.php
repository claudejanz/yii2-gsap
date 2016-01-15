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
class TimelineMax extends JsWidget {

    
    public function __construct($config = []) {
        parent::init();
        $this->addJs('var ' . $this->id . ' = new TimelineMax('.Json::encode($config).');');
        
    }
    
    

    public function to($target, $time, $options, $offset = null) {
        $view = $this->getView();
        if ($offset) {

            $this->addJs($this->id . '.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ',\'' . $offset . '\');');
        } else {

            $this->addJs($this->id . '.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        }
        
    }

    public function from($target, $time, $options, $offset = null) {
        $view = $this->getView();
        if ($offset) {

            $this->addJs($this->id . '.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ',\'' . $offset . '\');');
        } else {

            $this->addJs($this->id . '.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        }
    }
    public function reverse() {
        $this->addJs($this->id . '.reverse();');
    }
    
}
