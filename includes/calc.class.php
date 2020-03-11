<?php

class Calc {
    private $num1 = 0;
    private $num2 = 0;
    private $result = 0;

    public function Calc(int $num1, int $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function Add() {
        return $result = $this->num1 + $this->num2;
    }

    public function Subtract() {
        return $result = $this->num1 - $this->num2;
    }
    
    public function Multiply() {
        return $result = $this->num1 * $this->num2;
    }
    
    public function Divide() {
        return $result = $this->num1 / $this->num2;
    }

}