<?php
require_once("car.php");
require_once("functions.php");

ini_set("max_execution_time", 1200);
ini_set("memory_limit", "4G");

$mercedes = new car("Mercedes", "C-Class 180", "2020");
$bmw = new car("BMW");
$mclaren = new super_car("v8", "black", 400);

$mercedes->setBrand("Mercedes-Benz");
$mclaren->setBrand("McLaren");
?>

<html>
<head>
    <title>My first web page</title>
</head>
<body>
<?php
    echo "This is coming from the server!";
?>

Web page body

<?php
    $a = 5;
    $myvar = "Its a string";
    $b = 10;
    $c = $a + $b;
    echo $c;
    echo 'This is variable $c';
    echo "This is variable $c";
    echo "<br>";
    printf("Variable c as integer: %d", $c);
    echo "<br>";
    printf("Variable c as a float: %5.2f", $c);
    $d = $b / $a;
    echo "<br>";
    printf("Variable d as a float: %5.2f", $d);
    echo "<br>";
    $y0 = linear(3, 2) * quadratic(3,2, 5);
    echo $y0;

    $x = 10;
    if ($x == 10 || $y0 == 10) {
        echo "x and y are 10";
    } else {
        echo "they are not 10";
    }
    $x = 0;
    ?>

    <table border="1" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
        <tr>
            <td width="100">x</td>
            <td width="100">y</td>
        </tr>
<?php for ($x = 0; $x < 20; $x++) { ?>
        <tr>
            <td><?php echo $x; ?></td>
            <td><?php echo linear(5,3, $x); ?></td>
        </tr>
<?php } ?>
    </table>

<?php
    echo $mercedes->getBrand();
?>
</body>
</html>