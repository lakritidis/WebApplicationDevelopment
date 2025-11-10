<?php
function names($a, $b) { return strcmp($a, $b); }
function names_rev($a, $b) {  return strcmp($b, $a); }

function linear($a, $b, $x=100) {
    $y = $a + $b * $x;
    return $y;
}

function quadratic($a, $b, $x=100) {
    $y = $a + $b * $x * $x;
    return $y;
}

?>

