<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/20/2019
 * Time: 12:38 PM
 */
require_once './vendor/autoload.php';
use App\classes\Number;

if(isset($_POST['btn'])){
    $numbers = new Number();
    $data = $numbers->catchNumber();
}else{
    $data = [];
}
?>

<form action="" method="post">
    <table>
        <tr>
            <th>1st Number</th>
            <td><input type="number" name="firstNum"></td>
        </tr>
        <tr>
            <th>2nd Number</th>
            <td><input type="number" name="secondNum"></td>
        </tr>
        <tr>
            <th>3rd Number</th>
            <td><input type="number" name="thirdNum"></td>
        </tr>
        <tr>
            <th>4th Number</th>
            <td><input type="number" name="fourthNum"></td>
        </tr>
        <tr>
            <th>5th Number</th>
            <td><input type="number" name="fifthNum"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>

<div>
    <table border="1" width="50%" style="border-collapse: collapse;">
        <tr>
            <th>1st number</th>
            <th>2nd number</th>
            <th>3rd number</th>
            <th>4th number</th>
            <th>5th number</th>
        </tr>
        <tr>
            <?php
            foreach ($data as $value) {
                if ($value == "Submit"){
                    break;
                }
                ?>
                <td><?php echo $value ?></td>
                <?php
            }
            ?>
        </tr>
    </table>
</div>
