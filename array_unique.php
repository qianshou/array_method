<?php
/**
 * array_unique
 * 数组根据value去重
 *
 * array_count_values
 * 统计数组中所有值出现的次数
 */

$arr1 = [1,2,2,3,3,3,4,'4',"4",4];
$arr2 = $arr1;

$ret = array_unique($arr1);
print_r($ret);

$ret = array_count_values($arr2);
print_r($ret);
