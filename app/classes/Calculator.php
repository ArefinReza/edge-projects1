<?php

namespace App\classes;

class Calculator
{
    public function calculate($num1, $num2, $operation)
    {
        switch ($operation) {
            case 'add':
                return $num1 + $num2;
            case 'sub':
                return $num1 - $num2;
            case 'mul':
                return $num1 * $num2;
            case 'div':
                return $num2 != 0 ? $num1 / $num2 : 'Division by zero error';
            case 'mod':
                return $num2 != 0 ? $num1 % $num2 : 'Division by zero error';
            default:
                return 'Invalid operation';
        }
    }
}
