<?php
$a = 10;
$b = 3;
echo $a % $b;

if ($a % $b == 0) {
    echo 'Делится ' . $a / $b;
} else {
    echo 'Делится с остатком ' . $a % $b;
}

$st = pow(2, 10);
echo sqrt(245);

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $num) {
    $sum += $num * $num;
}
echo sqrt($sum);

$sqrt379 = sqrt(379);
echo round($sqrt379) . ' ' . round($sqrt379, 1) . ' ' . round($sqrt379, 2);

$sqrt587 = sqrt(587);
$roundArr = ['floor' => floor($sqrt587), 'ceil' => ceil($sqrt587)];

$nums = [4, -2, 5, 19, -130, 0, 10];
echo min($nums) . ' ' . max($nums);

echo rand(1, 100);

$randArr = [];
for ($i = 0; $i < 10; $i++) {
    $randArr[] = rand();
}

$a = 15;
$b = 7;
echo abs($a - $b);

$arr = [1, 2, -1, -2, 3, -3];
$newArr = array_map('abs', $arr);

$num = 30;
$dividers = [];
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $dividers[] = $i;
    }
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($arr as $value) {
    $sum += $value;
    $count++;
    if ($sum > 10) {
        break;
    }
}
echo $count;
?>