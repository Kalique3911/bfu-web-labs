<?php
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}

function arrayFill($value, $count) {
    return array_fill(0, $count, $value);
}
print_r(arrayFill('x', 5));
echo "\n";

$twoDimensionalArray = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($twoDimensionalArray as $subArray) {
    $sum += array_sum($subArray);
}
echo $sum;
echo "\n";

$matrix = [];
$value = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matrix[$i][$j] = $value++;
    }
}

$numbers = [2, 5, 3, 9];
$result = $numbers[0] * $numbers[1] + $numbers[2] * $numbers[3];
echo $result;
echo "\n";

$user = [
    'name' => 'Иван',
    'surname' => 'Иванов',
    'patronymic' => 'Иванович'
];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];
echo "\n";

$date = [
    'year' => date('Y'),
    'month' => date('m'),
    'day' => date('d')
];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];
echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr);
echo "\n";

echo end($arr);
echo "\n";

echo $arr[count($arr) - 2];
?>