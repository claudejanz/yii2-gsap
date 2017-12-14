<?php

namespace claudejanz\gsap;

use yii\helpers\Json;

/**
 * This is just an example.
 */
class TweenMax extends TweenWidget
{

    private static $_inst = "";

    public function __construct($config = [])
    {
        parent::init();
        self::$_inst = $this;
        return self::$_inst;
    }

    public static function to($target, $time, $options)
    {
        self::$_inst = new static();
        self::$_inst->addJs('var ' . self::$_inst->id . ' = TweenMax.to(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        return self::$_inst;
    }

    public static function from($target, $time, $options)
    {
        self::$_inst = new static();
        self::$_inst->addJs('var ' . self::$_inst->id . ' = TweenMax.from(\'' . $target . '\',' . $time . ',' . Json::encode($options) . ');');
        return self::$_inst;
    }

    public static function staggerFrom($target, $time, $options, $delay = 0.2)
    {
        self::$_inst = new static();
        self::$_inst->addJs("var " . self::$_inst->id . " = TweenMax.staggerFrom('$target',$time," . Json::encode($options) . ",$delay);");
        return self::$_inst;
    }

    public static function staggerTo($target, $time, $options, $delay = 0.2)
    {
        self::$_inst = new static();
        self::$_inst->addJs("var " . self::$_inst->id . " = TweenMax.staggerTo('$target',$time," . Json::encode($options) . ",$delay);");
        return self::$_inst;
    }

    public static function staggerFromTo($target, $time, $optionsFrom, $optionsTo, $delay = 0.2)
    {
        self::$_inst = new static();
        self::$_inst->addJs("var " . self::$_inst->id . " = TweenMax.staggerTo('$target',$time," . Json::encode($optionsFrom) . "," . Json::encode($optionsTo) . ",$delay);");
        return self::$_inst;
    }
    
    
    public function play() {
        $this->addJs($this->id . '.play();');
        return $this;
    }
    

}
