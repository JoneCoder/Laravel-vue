<?php
session_start();
if($_SESSION['id'] == null){
    header('location:index.php');
}
require_once './vendor/autoload.php';
use App\classes\Student;
use App\classes\Login;
$message = '';
if (isset($_POST['btn'])){
    $data = new Student();
    $message = $data->create();
}

if(isset($_GET['logout'])){
    $logout = new Login();
    $logout->logout();
}
?>
<hr>
    <a href="dashboard.php">Add Student ||</a>
    <a href="view.php">View Student ||</a>
    <a href="?logout=true">Logout ||</a> <?php echo $_SESSION['name']; ?>
<hr>
<div><p style="color: green;"><?php echo $message; ?></p></div>
<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>