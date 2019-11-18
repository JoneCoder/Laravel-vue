<?php
    // echo "<!DOCTYPE html>";
    // echo "<html>";
    //     echo "<head>";
    //         echo "<title>Home</title>";
    //     echo "</head>";
    //     echo "<body>";
    //         echo "<h1>This is Heading.</h1>";
    //         echo "<p>This is Paragraph.</p>";
    //     echo "</body>";
    // echo "</html>";
?>
<!-- <!DOCTYPE html>
<html ln="en">
    <head>
        <title><?php echo "Home"; ?></title>
    </head>
    <body>
        <h1><?php echo "This is Heading."; ?></h1>
        <p><?php echo "This is Paragraph."; ?></p>
        <input trype="text" value="<?php echo 'Hello!'; ?>">
    </body>
</html> -->

<?php
/*
    *3 major rules define a variable
        *start with $ sign
        *a-z, A-Z, 0-9, _
        *No number in first
    *3 stanard rules define a variable
        *small letter
        *meaningful
        *readable
*/
$firstName = 'Robin';
$lastName = 'Hossain';
echo 'Full Name is: '.$firstName.' '.$lastName;

$number = 123;
$float = 12.34;
$bool = true;

/*
        *Operator
            *Arithmetic Operator
                *Binary (+, -, *, /, %)
                *Unary (++, --, -)
            *Assignment Opertor
                * =, +=, -=, *=, /=, %=, .=
            *Conditional Opertor
                * >, <, >=, <=, ==, !=, ===, !==
            *Logical Opertor
                * &&, ||, !
*/

$x = 10; $y = 20;

echo '<br/>';
// echo $x + $y;
// echo '<br/>';
// echo $x - $y;
// echo '<br/>';
// echo $x * $y;
// echo '<br/>';
// echo $x / $y;
// echo '<br/>';
// echo $x % $y;


//Post Increment
echo $x++;
echo '<br/>';
echo $x;
echo '<br/>';

//post Decrement
echo $x--;
echo '<br/>';
echo $x;
echo '<br/>';

echo $x += $y;
echo '<br/>';
echo $x -= $y;
echo '<br/>';
echo $x *= $y;
echo '<br/>';
echo $x /= $y;
echo '<br/>';
echo $x %= $y;
echo '<br/>';
echo $x .= $y;


?>
