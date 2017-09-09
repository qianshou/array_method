<?php
/**
 * array_map
 * 将回调函数，作用到数组中的每个元素
 *
 * array_reduce
 * 用回调函数，迭代地将数组简化为单一的值
 */

$arr1 = range(1,10);
$arr2 = $arr1;

$ret = array_map("funMap",$arr1);
print_r($ret);
echo "\n====\n";

$ret = array_reduce($arr2,"funReduce");
echo ($ret);

function funMap($a){
    return pow($a,2);
}

function funReduce($a,$b){
    return $a+$b;
}