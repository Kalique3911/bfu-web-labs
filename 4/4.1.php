<?php
$str = 'a1b2c3';

$result = preg_replace_callback(
    '/\d+/',
    function($matches) {
        $number = (int)$matches[0]; 
        $power = pow($number, 4);   
        return $power;              
    },
    $str
);

echo $result;
?>