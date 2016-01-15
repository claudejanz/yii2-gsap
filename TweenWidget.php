<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\gsap;

use claudejanz\js\JsWidget;


/**
 * Description of TweenWidget
 *
 * @author Claude
 */
class TweenWidget extends JsWidget {
   public function init() {
        AssetGsap::register($this->getView());
    }
}
