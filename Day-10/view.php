<?php
require_once './vendor/autoload.php';
use App\classes\Student;

$student = new Student();
$queryResult = $student->studentInfo();
if(isset($_GET['status'])){
    $student->delete($_GET['id']);
}
?>
<?php
if(isset($_GET['success'])){
?>
<div><p style="color: green;">Your Data Update Successfully!</p></div>
<?php
}

if (isset($_POST['searchBtn'])){
    $queryResult = $student->searchByTxt();
}
?>
<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
<hr>
<form action="" method="post">
    <table>
        <tr>
            <th>Enter Your Search Item:</th>
            <td><input type="text" name="search"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="searchBtn" value="Search"></td>
        </tr>
    </table>
</form>
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
            <a href="?status=delete&id=<?php echo $data['id'] ?>" onclick="return confirm('Are You Sure Delete!')">Delete</a>
        </td>
    </tr>
    <?php } ?>

</table>