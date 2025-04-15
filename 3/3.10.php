<?php
function checkSum($a, $b) {
    return ($a + $b) > 10;
}

function checkEqual($a, $b) {
    return $a == $b;
}

if ($test == 0) echo 'верно';

if ($age < 10 || $age > 99) {
    echo 'Число меньше 10 или больше 99';
} else {
    $sum = array_sum(str_split((string)$age));
    if ($sum <= 9) {
        echo 'Сумма цифр однозначна';
    } else {
        echo 'Сумма цифр двузначна';
    }
}

if (count($arr) == 3) {
    echo array_sum($arr);
}
?>