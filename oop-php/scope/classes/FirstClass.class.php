<?php

// Scope Resolution Operator (::)


//Here is the first class example!

class FirstClass{
    //properties
    const Example = "You can't change this";

    // Methods
    public static function test(){
        echo self::Example;

    }
}

FirstClass::test();


?>