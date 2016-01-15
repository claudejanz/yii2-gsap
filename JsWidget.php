<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\gsap;

use yii\base\Widget;


/**
 * Description of TweenWidget
 *
 * @author Claude
 */
class JsWidget extends Widget {
    
  
   public function init() {
        parent::init();
        AssetGsap::register($this->getView());
    }
    public function addJs($value){
        $this->view->registerJs($value);
    }
    
    public function __toString() {
        return $this->id;
    }
}
