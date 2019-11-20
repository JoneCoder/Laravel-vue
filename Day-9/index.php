<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/20/2019
 * Time: 12:38 PM
 */
require_once './vendor/autoload.php';
use App\classes\Student;

if(isset($_POST['btn'])){
    $students = new Student();
    $message = $students->create();
}else{
    $message = '';
}
?>
<hr>
    <a href="index.php">Add Student</a>
    <a href="view.php">View Student</a>
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
