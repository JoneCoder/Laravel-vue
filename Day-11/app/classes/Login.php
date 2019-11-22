<?php
namespace App\classes;

class Login
{
    public function adminCheck(){
        extract($_POST);
        $md5password = md5($password);
        $link = mysqli_connect('localhost', 'root', '', 'student');
        $sql = "SELECT * FROM users WHERE email = '$email' && password = '$md5password'";
        if($data = mysqli_query($link, $sql)){
            $user = mysqli_fetch_assoc($data);
            if($user){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                header('location:dashboard.php');
            }else{
                header('location:index.php');
            }
        }else{
            die('Query Problem'. mysqli_error($link));
        }
    }
    
    public function logout(){
        session_destroy();
        header('location:index.php');
    }
}