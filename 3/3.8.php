<?php
function increaseEnthusiasm($str) {
    return $str . '!';
}
echo increaseEnthusiasm("Hello");

function repeatThreeTimes($str) {
    return $str . $str . $str;
}
echo repeatThreeTimes("Hi");

echo increaseEnthusiasm(repeatThreeTimes("Wow"));

function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

function printArrayRecursive($arr, $index = 0) {
    if ($index < count($arr)) {
        echo $arr[$index] . ' ';
        printArrayRecursive($arr, $index + 1);
    }
}

function sumDigits($num) {
    $sum = array_sum(str_split((string)$num));
    return $sum > 9 ? sumDigits($sum) : $sum;
}
?>