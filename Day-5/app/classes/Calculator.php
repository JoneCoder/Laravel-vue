<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/19/2019
 * Time: 5:19 PM
 */

namespace App\classes;


class Calculator
{
    public function myCalculator(){
        $data = (object)$_POST;
        $firstNumber = $data->firstNumber;
        $secondNumber = $data->secondNumber;
        $action = $data->btn;

        switch ($action){
            case '+':
                return $firstNumber + $secondNumber;
                break;
            case '-':
                return $firstNumber - $secondNumber;
                break;
            case '*':
                return $firstNumber * $secondNumber;
                break;
            case '/':
                return $firstNumber / $secondNumber;
                break;
            case '%':
                return $firstNumber % $secondNumber;
                break;
            default:
                return "Invalid Action!";
                break;
        }
    }
}