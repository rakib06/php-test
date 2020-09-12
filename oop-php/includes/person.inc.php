<?php

class Person {
    // protected = inherit korle jabe
    protected $first = "First Name";
    private $last = "L";
    private $age = "25";

    

    

}

class Pet  extends Person {
    
    public function owner(){
        $a = $this->first;
        return $a;
    }

    /* 
    // Step 1
    public function owner(){
        $a = "hi there";
        return $a;

    }*/

}
?>