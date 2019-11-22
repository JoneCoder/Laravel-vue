<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:dashboard.php');
}
require_once './vendor/autoload.php';
use App\classes\Login;

if(isset($_POST['btn'])){
    $user = new Login();
    $user->adminCheck();
}

?>


<form action="" method="post">
    <table>
        <tr>
            <th>E-mail</th>
            <td><input type="email" name="email"></td>
        </tr>
        
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit">
        </tr>
    </table>
</form>