<?php
require_once './Pencilbox.php';


class Example extends Pencilbox
{
    public $mobile = "01234567890";
    protected $email = "example@gmail.com";
    private $password = "12345678";
    
    public function one(){
        $this->two();
        echo '<br/>';
        $this->three();
    }
    
    public function name($name){
        echo $name;
    }
    
    protected function two(){
        echo $this->password;
    }
    
    private function three(){
        $this->sub(23, 45);
    }
}