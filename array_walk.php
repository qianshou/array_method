<?php
/**
 * array_walk
 * 依次对数组中的元素，调用自定义函数
 *
 * array_walk_recursive
 * 依次对数组中的元素，递归的调用自定义函数（适用于多维数组）
 */
function func($value,$key){
    echo $key."=>".$value.PHP_EOL;
}

$arr = [
    "a"=>111,
    "b"=>222,
    "c"=>333
];
array_walk($arr,"func");

echo "\n=====\n";

$arr = [
    'a'=>111,
    'b'=>[
        'x'=>211,
        'y'=>212,
        'z'=>213
    ],
    'c'=>333
];
array_walk_recursive($arr,"func");