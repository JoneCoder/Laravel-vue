<?php
require_once './vendor/autoload.php';
use App\classes\Student;

$student = new Student();
$data = $student->studentInfo();
print_r($data);
?>

<hr>
<a href="index.php">Add Student</a>
<a href="view.php">View Student</a>
<hr>

<table border="1" style="border-collapse: collapse;" width="50%">
    <tr>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Number</th>
    </tr>
    <tr>
    
    </tr>
</table>