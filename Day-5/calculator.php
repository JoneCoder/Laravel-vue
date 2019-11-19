<?php
/**
 * Created by PhpStorm.
 * User: FelixWeb
 * Date: 11/19/2019
 * Time: 5:21 PM
 */

require_once './vendor/autoload.php';
use App\classes\Calculator;

if(isset($_POST['btn'])){
    $calculator = new Calculator();
    $result = $calculator->myCalculator();
}else{
    $result = '';
}

?>

<form action="" method="post">
    <table>
        <tr>
            <th>Result</th>
            <td>
                <input type="number" disabled name="result" value="<?php echo $result; ?>">
            </td>
        </tr>
        <tr>
            <th>First Number</th>
            <td><input type="number" name="firstNumber"></td>
        </tr>
        <tr>
            <th>Second Number</th>
            <td><input type="number" name="secondNumber"></td>
        </tr>
        <tr>
            <th>Action</th>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>
