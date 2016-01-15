<?php

namespace claudejanz\gsap;

use yii\helpers\Json;

/**
 * This is just an example.
 */
class TweenMax extends TweenWidget {

    private static $_inst = "";

    public function __construct($config = []) {
        if (!isset(self::$_inst))
            $this->addJs('var ' . $this->id . ' = new TweenMax(' . Json::encode($config) . ');');
    }

    public static function to($target, $time, $options) {
        self::$_inst = new static();
        self::$_inst->addJs('var ' . self::$_inst->id . ' = TweenMax.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        return self::$_inst;
    }

    public static function from($target, $time, $options) {
        self::$_inst = new static();
        self::$_inst->addJs('var ' . self::$_inst->id . ' = TweenMax.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        return self::$_inst;
    }

}
