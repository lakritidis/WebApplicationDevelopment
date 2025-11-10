<html lang="">
<?php
require_once("functions.php");
?>
<head>
    <title>PHP Arrays</title>
</head>
<body>
<?php
    $matrix = array(1950, 1960, 1970, 1980, 1990, 2000, "a string", 450, 45);
    print_r($matrix);
    echo $matrix[5];
    $num_elements = count($matrix);
    for ($i = 0 ; $i < $num_elements; $i++) {
        echo $matrix[$i] . ", ";
    }
    echo "<br><br><br>";
    $matrix_keys = [ "name" => "John", "surname" => "Smith", "age" => 24 ];

    foreach ($matrix_keys as $k => $v) {
        echo $k . ", " . $v . "<br>";
    }
    if (in_array("Martha", $matrix_keys)) {
        echo "John is here";
    } else {
        echo "John is not here";
    }

    $cars_arr= array (
        "car1" => "Ferrari", "car2" => "McLaren", "car3" => "Williams",
        "car4" => "Mercedes", "car5" => "Renault", "car6" => "Peugeot",
        "car7" => "Toyota", "car8" => "Red Bull", "car9" => "Honda");

    usort($cars_arr, 'names_rev');
    var_dump($cars_arr);
    //usort($cars_arr, 'names_rev');
    //var_dump($cars_arr);
?>
</body>
</html>