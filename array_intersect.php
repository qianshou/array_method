<?php
/**
 * array_intersect($arr1,$arr2[,$arr3,$arr4])
 * 计算数组$arr1与后面参数中数组的交集
 *
 * array_diff($arr1,$arr2[,$arr3,$arr4])
 * 计算数组$arr1与后面参数中数组的差集（只在arr1中出现，不在后面的数组中出现）
 */

$arr1 = [1,2,3,4];
$arr2 = ['1',5,7,'2',3];
$arr3 = ['2'];

$ret = array_intersect($arr1,$arr2,$arr3);
print_r($ret);

$ret = array_diff($arr1,$arr2);
print_r($ret);