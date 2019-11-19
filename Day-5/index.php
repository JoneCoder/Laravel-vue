<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/19/2019
 * Time: 3:37 PM
*/
require_once './vendor/autoload.php';
use App\classes\User;

if(isset($_POST['btn'])){
    $user = new User();
    $result = $user->makeFullName();
}else{
    $result = '';
}
?>

<form action="" method="post">
<table>
    <tr>
        <th>First Name</th>
        <td><input type="text" name="firstName"></td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td><input type="text" name="lastName"></td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td><input type="text" value="<?php echo $result; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" name="btn" value="Submit"></td>
    </tr>
</table>
</form>
<a href="calculator.php">PHP Calculator</a>