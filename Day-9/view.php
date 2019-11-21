<?php
require_once './vendor/autoload.php';
use App\classes\Student;

$student = new Student();
$queryResult = $student->studentInfo();

?>
<?php
if(isset($_GET['success'])){
?>
<div><p style="color: green;">Your Data Update Successfully!</p></div>
<?php
}
?>
<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
<hr>

<table border="1" style="border-collapse: collapse;" width="50%">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Number</th>
        <th>Action</th>
    </tr>

    <?php while($data = mysqli_fetch_assoc($queryResult)){ ?>
    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['name'] ?></td>
        <td><?php echo $data['email'] ?></td>
        <td><?php echo $data['mobile'] ?></td>
        <td>
            <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
    <?php } ?>

</table>