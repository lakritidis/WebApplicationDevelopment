<?php
$number = 2;
$a = "This is my string no $number";
$b = '------This is my string no $number------';

$dirty = '<b>User data</b>. <i>More user data</i>. <a href="dangerouslink">You earned 1000 euros</a><script>alert("hack");</script>';

echo $a;
echo '<br>';
echo $b;

$pos = mb_strpos($a, "is", 3, "UTF-8");
echo '<br>';
echo $pos;

$str = $substr = mb_substr($a, 100, 4, "UTF-8");
echo '<br>';
echo $str;


echo '<br>';
echo "Trimmed version: " . trim($b);

echo '<br>';
echo sanitize($dirty);

echo '<br>';
$c = "small";
$d = "δοκιμή";
echo strlen($c);
echo '<br>';
echo "Length of d is: " . mb_strlen($d, "UTF-8");

echo '<br>';
$date_from = "2025-01-10";
$date_to = "2025-01-20";
echo '<br>';

echo date("d/m/Y, H:i:s");

echo '<br>';
echo strtotime($date_from) . "-" . strtotime($date_to);

function sanitize($str) {
    $clean_str = trim(strip_tags($str));
    return $clean_str;
}
?>

