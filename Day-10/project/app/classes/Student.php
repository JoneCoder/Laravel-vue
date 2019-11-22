<?php
namespace App\classes;

class Student
{
    public function create(){
        extract($_POST);
        $name = $firstName.' '.$lastName;
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "INSERT INTO students(name, email, mobile) VALUES('$name', '$email', '$mobile')";
        
        if(mysqli_query($link, $sql)){
            return 'success';
        }else{
            die('Database Problem'.mysqli_error($link));
        }
    }
    
    public function getInfo(){
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM students";
        
        if($data = mysqli_query($link, $sql)){
            return $data;
        }else{
            die('Database Problem'.mysqli_error($link));
        }
    }
    
    public function search(){
        extract($_POST);
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM students WHERE name LIKE '%$searchKey%' || email LIKE '%$searchKey%' || mobile LIKE '%$searchKey%'";
        
        if($data = mysqli_query($link, $sql)){
            return $data;
        }else{
            die('Database Problem'.mysqli_error($link));
        }
    }
    
    public function edit($id){
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM students WHERE id = '$id'";
        
        if($data = mysqli_query($link, $sql)){
            $data = mysqli_fetch_assoc($data);
            return $data;
        }else{
            die('Database Problem'.mysqli_error($link));
        }
    }
    
    public function update($id){
        extract($_POST);
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "UPDATE students SET name='$name', email='$email', mobile ='$mobile' WHERE id= '$id'";
        
        if(mysqli_query($link, $sql)){
            header('location:view.php');
        }else{
            die('Database Problem'.mysqli_error($link));
        }
    }
    
    public function delete($id){
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "DELETE FROM students WHERE id= '$id'";
        
        if(mysqli_query($link, $sql)){
            return true;
        }else{
            die('Database Problem'.mysqli_error($link));
        }
    }
}