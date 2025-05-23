<?php
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "Остаток от деления $a на $b: $remainder\n\n";

function checkDivision($a, $b) {
    if ($a % $b == 0) {
        echo "Делится. Результат: " . ($a / $b) . "\n\n";
    } else {
        echo "Делится с остатком. Остаток: " . ($a % $b) . "\n\n";
    }
}
checkDivision(10, 2);
checkDivision(10, 3);

$st = pow(2, 10);
echo "2 в 10 степени: $st\n";

$sqrt245 = sqrt(245);
echo "Квадратный корень из 245: $sqrt245\n";

$array = [4, 2, 5, 19, 13, 0, 10];
$sumOfSquares = 0;
foreach ($array as $num) {
    $sumOfSquares += $num * $num;
}
$sqrtSum = sqrt($sumOfSquares);
echo "Корень из суммы квадратов элементов массива: $sqrtSum\n\n";

$sqrt379 = sqrt(379);
echo "Квадратный корень из 379:\n";
echo "До целых: " . round($sqrt379) . "\n";
echo "До десятых: " . round($sqrt379, 1) . "\n";
echo "До сотых: " . round($sqrt379, 2) . "\n\n";

$sqrt587 = sqrt(587);
$rounded = [
    'floor' => floor($sqrt587),
    'ceil' => ceil($sqrt587)
];
echo "Квадратный корень из 587:\n";
print_r($rounded);
echo "\n";

$numbers = [4, -2, 5, 19, -130, 0, 10];
echo "Минимальное число: " . min($numbers) . "\n";
echo "Максимальное число: " . max($numbers) . "\n\n";

echo "Случайное число от 1 до 100: " . rand(1, 100) . "\n";

$randomArray = [];
for ($i = 0; $i < 10; $i++) {
    $randomArray[] = rand(1, 100);
}
echo "Массив из 10 случайных чисел:\n";
print_r($randomArray);
echo "\n";

function absDifference($a, $b) {
    return abs($a - $b);
}
echo "Модуль разности 5 и 3: " . absDifference(5, 3) . "\n";
echo "Модуль разности 3 и 5: " . absDifference(3, 5) . "\n";
echo "Модуль разности -5 и -3: " . absDifference(-5, -3) . "\n\n";

$array = [1, 2, -1, -2, 3, -3];
$positiveArray = array_map('abs', $array);
echo "Массив с положительными числами:\n";
print_r($positiveArray);
echo "\n";

function findDivisors($num) {
    $divisors = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}
$number = 30;
$divisors = findDivisors($number);
echo "Делители числа $number:\n";
print_r($divisors);
echo "\n";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($array as $num) {
    $sum += $num;
    $count++;
    if ($sum > 10) {
        break;
    }
}
echo "Нужно сложить $count первых элементов, чтобы сумма была больше 10\n";
?>