<?php
session_start();
if($_SESSION['id'] == null){
    header('location:index.php');
}
require_once  './vendor/autoload.php';
use App\classes\Student;
use App\classes\Login;

$student = new Student();
$data = $student->collect($_GET['id']);
$data = (object)$data;

if (isset($_POST['btn'])){
    $student->update($data->id);
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

<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" value="<?php echo $data->name ?>"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value="<?php echo $data->email ?>"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="text" name="mobile" value="<?php echo $data->mobile ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>