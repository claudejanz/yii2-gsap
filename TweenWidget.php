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
class TweenWidget extends Widget {
    
   protected static $_view;
  
   public function init() {
        parent::init();
        self::$_view = $this->getView();
        AssetGsap::register(self::$_view);
    }
    public function setJs($value){
        $this->view->registerJs($value);
    }
}
