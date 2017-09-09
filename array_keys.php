<?php
/**
 * array_keys
 * 返回数组中所有的key构成的数组
 *
 * array_values
 * 返回数组中所有的value构成的数组
 */

$arr = [
    'a'=>111,
    'b'=>222,
    'c'=>333
];

$keys = array_keys($arr);
$values = array_values($arr);

print_r($keys);
print_r($values);