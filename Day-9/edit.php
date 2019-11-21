<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/21/2019
 * Time: 12:11 PM
 */
require_once  './vendor/autoload.php';
use App\classes\Student;

$student = new Student();
$data = $student->collect($_GET['id']);
$data = (object)$data;

if (isset($_POST['btn'])){
    $student->update($data->id);
}
?>

<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
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
