<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/20/2019
 * Time: 12:47 PM
 */

namespace App\classes;

class Student
{
    public function create(){
        extract($_POST);
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "INSERT INTO students (name, email, mobile) VALUES ('$name', '$email', '$mobile')";
        if(mysqli_query($link, $sql)){
            return "Your Data Save Successfully!";
        }else{
            die("Database query Problem! ".mysqli_error($link));
        }

    }
}