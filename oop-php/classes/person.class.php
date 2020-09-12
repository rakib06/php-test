<?php

class Person {
    // Properties
    private $name;
    public $eyeColor;
    public $age;

    // Static
    public static $drinkingAge = 21;

    // constructor
    public function  __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Methods 
    public function setName($name){
        $this->name = $name;
        
    }


    public function getName(){
        return $this->name;
        
    }

    // Static  
    public function getDA(){
        return self::$drinkingAge;
        
    }

    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA ;
    }

    public function __destruct(){

    }

    

}


?>