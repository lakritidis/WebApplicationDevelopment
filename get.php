<?php
echo "<pre>";
print_r($_GET);
echo "\n";

if (isset($_GET['fname'])) {
    echo "I have been set";
    $a_param = sanitize($_GET['fname']);
} else {
    echo "I have not been set";
    $a_param = "";
}

if (isset($_GET['lname'])) {
    $b_param = sanitize_2($_GET['lname']);
} else {
    $b_param = "";
}

echo $a_param;
echo $b_param;

echo "</pre>";

function sanitize($str) {
    $clean_str = trim(strip_tags($str));
    return $clean_str;
}

function sanitize_2($str) {
    $clean_str = trim($str);
    return $clean_str;
}
?>