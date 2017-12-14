<?php

namespace claudejanz\gsap;

use yii\helpers\Json;

/**
 * This is just an example.
 */
class TweenLite extends TweenWidget
{

    private static $_inst = "";

    public function __construct($config = [])
    {
        $this->addJs('var ' . $this->id . ' = new TweenLite(' . Json::encode($config) . ');');
        parent::init();
    }

    public static function to($target, $time, $options)
    {
        self::$_inst = new static();
        self::$_inst->addJs('var ' . self::$_inst->id . ' = TweenLite.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        return self::$_inst;
    }

    public static function from($target, $time, $options)
    {
        self::$_inst = new static();
        self::$_inst->addJs('var ' . self::$_inst->id . ' = TweenLite.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        return self::$_inst;
    }

}
