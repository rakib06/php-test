<?php

class SecondClass extends FirstClass{
    
    public static $staticProperty = "A static Property";

    public static function anotherTest(){
        echo parent::Example;
        echo self::$staticProperty;
    }
}

?>
