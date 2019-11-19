<?php
require_once './vendor/autoload.php';
use App\classes\Series;

if(isset($_POST['btn'])){
    $series = new Series();
    $result = $series->createSeries();
}else{
    $result = "";
}


?>
<div>
    <form action="" method="post"> 
        <table>
            <tr>
                <th>Enter Your String</th>
                <td><input type="text" name="givenString"></td>
            </tr>
            
            <tr>
                <th>Total Number of Word</th>
                <td><input type="text"></td>
            </tr>
            <tr>
                <th>Total Number of Character</th>
                <td><input type="text"></td>
            </tr>
            
            <tr>
                <th></th>
                <td><input type="submit" name="btn1" value="submit"></td>
            </tr>
        </table>
    </form>
</div>
<hr/>
<form action="" method="post">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="startingNum"/></td>
        </tr>
        
        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="endingNum"/></td>
        </tr>
        
        <tr>
            <th>Your Choice</th>
            <td>
                <input type="radio" name="choice" value="1"> Odd
                <input type="radio" name="choice" value="2"> Even
            </td>
        </tr>
        
        <tr>
            <th>Result</th>
            <td><textarea row="10" cols="40"><?php echo $result; ?></textarea></td>
        </tr>
        
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"/></td>
        </tr>
    </table>
</form>
