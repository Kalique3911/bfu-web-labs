<?php
$numbers = [1, 2, 3, 4, 5];
$average = array_sum($numbers) / count($numbers);

$sum = array_sum(range(1, 100));

$sqrtArray = array_map('sqrt', $numbers);

$alphabet = array_combine(range('a', 'z'), range(1, 26));

$str = '1234567890';
$pairs = str_split($str, 2);
$sumPairs = array_sum($pairs);
?>