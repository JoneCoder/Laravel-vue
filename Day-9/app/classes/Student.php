<?php                                     

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
    
    public function studentInfo(){
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM students";
        if($queryResult = mysqli_query($link, $sql)){
            //$students = mysqli_fetch_array($queryResult);
            $students = [],
            while($data = mysqli_fetch_assoc($queryResult)){
                $students = $data; 
            }
            return $students;
            
        }else{
            die("Database query Problem! ".mysqli_error($link));
        }
    }
    
}