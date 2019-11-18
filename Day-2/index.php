<?php

$name;
$name = "Hassan Mahmod";
echo $name.'<br/>';

$data = Array();

$data[0] = 10;
$data[1] = 15;
$data[2] = 20;
$data[3] = 25;
$data[4] = 30;
$data[5] = 35;

$data['name'] = "korim";
$data['city'] = "Dhaka";


echo $data['city'];

$data = Array(10, 15, 20, "korim", "Dhaka");

echo $data[3].'<br/>';

foreach($data as $value){
    echo $value.'<br/>';
}

$data = [
    'name'  =>  "Hassan Mahmod",
    'age'   =>  26,
    'city'  =>  "Dhaka",
    'country'   =>  "Bangladesh",
    'mobile'    =>  "01234567890"
];

foreach($data as $value){
    echo $value.'<br/>';
}

$students = [
    [
        'name'  =>  "Hassan Mahmod",
        'age'   =>  26,
        'city'  =>  "Dhaka",
        'country'   =>  "Bangladesh",
        'mobile'    =>  "01234567890"
    ],

    [
        'name'  =>  "Md. Robel Hossain",
        'age'   =>  27,
        'city'  =>  "Dhaka",
        'country'   =>  "Bangladesh",
        'mobile'    =>  "01234567890"
    ],

    [
        'name'  =>  "Md. Rakib Hossain",
        'age'   =>  23,
        'city'  =>  "Dhaka",
        'country'   =>  "Bangladesh",
        'mobile'    =>  "01234567890"
    ],
];

echo '<br/>';

foreach($students as $student){
    foreach($student as $key => $value){
        echo $key.' ----> '.$value.'<br/>';
    }
    echo "<hr/>";
}
?>

<table border="1" width="500">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
        <th>Mobile</th>
    </tr>

    
        <?php foreach($students as $student){ ?>
        <tr>
            <?php foreach($student as $data){
            ?>
            <td><?php echo $data; ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
</table>

<?php

//print_r($students);

echo "<br/>";
echo "<br/>";
echo "<br/>";

//var_dump($students);

function test($x, $y){
    $z = $x + $y;
    echo $z;
}
echo '<br/>=============<br/>';
test(10, 20);

echo '<br/>=============<br/>';
test(15, 10);

echo '<br/>=============<br/>';
test(25, 30);








