<?php
require_once './Example.php';

$example = new Example();

echo $example->name;

echo '<br/>';
$example->add(10, 3);

echo '<br/>';
echo $example->one();

echo '<br/>';
echo $example->name($_POST['name']);



?>

<form action="" method="post">
    <input type="text" name="name" placeholder="Your Name"/>
    <input type="submit" name="btn" value="Submit" />
</form>