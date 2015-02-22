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

    
    public function init() {
        parent::init();
        $view = $this->getView();
        $this->setJs('var ' . $this->id . ' = new TimelineLite();');
        
    }
    
    public function setJs($value){
        $this->view->registerJs($value);
    }

    public function to($target, $time, $options, $offset = null) {
        $view = $this->getView();
        if ($offset) {

            $this->setJs($this->id . '.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ',\'' . $offset . '\');');
        } else {

            $this->setJs($this->id . '.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        }
        
    }

    public function from($target, $time, $options, $offset = null) {
        $view = $this->getView();
        if ($offset) {

            $this->setJs($this->id . '.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ',\'' . $offset . '\');');
        } else {

            $this->setJs($this->id . '.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        }
    }
    public function reverse() {
        $this->setJs($this->id . '.reverse();');
    }
}
