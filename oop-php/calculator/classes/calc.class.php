<?php

class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $op, int $first, int $second ){
        $this->operator = $op;
        $this->num1 = $first;
        $this->num2 = $second;

    }

    public function claculate(){
        //
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            
            default:
                echo "Error! ";
                break;
        }
    }
}

?>