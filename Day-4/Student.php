<?php
namespace App\classes;
class Student
{
    public $name = "Sojib Khan";
    static $city = "Dhaka";
    protected $email = "sojib@gmail.com";
    private $mobile = "01234567890";
    public $demo;

    public function __construct($test){
        echo "In a magic method";
        $this->demo = $test; 
    }

    public function test(){
        echo "test<br/>";
        Student::world();
        echo "<br/>";
        echo Student::$city;
        echo $this->mobile;
        $this->test1();
        echo $this->demo;
    } 

    public function test1(){
        echo $this->email;
    }

    protected function hello(){
        echo "In Hello";
    }

    private function world(){
        echo "In World";
    }
}