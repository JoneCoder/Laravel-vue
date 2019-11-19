<?php
require_once './Student.php';

use App\classes\Student;
$student = new Student('BITM');
$student->test();

// use App\classes\Student;
// Student::test();

// $student = new App\classes\Student();
// $student->test();