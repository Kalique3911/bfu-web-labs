<?php
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]);

preg_match_all('/a..a/', $str, $matches);
print_r($matches[0]);
?>