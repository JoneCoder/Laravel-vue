<?php
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
            return $queryResult;
        }else{
            die("Database query Problem! ".mysqli_error($link));
        }
    }

    public function collect($id){
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM students WHERE id = '$id'";
        if($queryResult = mysqli_query($link, $sql)){
            $data = mysqli_fetch_assoc($queryResult);
            return $data;
        }else{
            die("Database query Problem! ".mysqli_error($link));
        }
    }

    public function update($id){
        $data = (object)$_POST;
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "UPDATE students SET name='$data->name',email='$data->email',mobile='$data->mobile' WHERE id= '$id'";
        if(mysqli_query($link, $sql)){
            header('Location: view.php?success=1');
        }else{
            die("Database query Problem! ".mysqli_error($link));
        }
    }

    public function delete($id){
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "DELETE FROM students WHERE id= '$id'";
        if(mysqli_query($link, $sql)){
            header('Location: view.php');
        }else{
            die("Database query Problem! ".mysqli_error($link));
        }
    }

    public function searchByTxt(){
        extract($_POST);
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM students WHERE name LIKE '%$search%' || email LIKE '%$search%' || mobile LIKE '%$search%'";
        if($queryResult = mysqli_query($link, $sql)){
            return $queryResult;
        }else{
            die("Database query Problem! ".mysqli_error($link));
        }
    }
}

    
