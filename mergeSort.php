<?php

/**
 *
 * @param array $arr
 * @return array
 */
function mergeSort(array $arr): array {
    $len = count($arr);
    $mid = (int) $len / 2;
    if ($len == 1)
        return $arr;

    //要先知道递归算法的复杂度如何计算 , 然后.....快排也一样
    //https://www.cnblogs.com/leoin2012/p/3911924.html
    $left = mergeSort(array_slice($arr, 0, $mid));
    $right = mergeSort(array_slice($arr, $mid));

    return merge($left, $right);
}

/**
 * @param array $left
 * @param array $right
 * @return array
 */
function merge(array $left, array $right): array {
    $combined = [];
    $countLeft = count($left);
    $countRight = count($right);
    $leftIndex = $rightIndex = 0;

    while ($leftIndex < $countLeft && $rightIndex < $countRight) {
        if ($left[$leftIndex] > $right[$rightIndex]) {
            $combined[] = $right[$rightIndex];
            $rightIndex++;
        } else {
            $combined[] = $left[$leftIndex];
            $leftIndex++;
        }
    }
    while ($leftIndex < $countLeft) {
        $combined[] = $left[$leftIndex];
        $leftIndex++;
    }
    while ($rightIndex < $countRight) {
        $combined[] = $right[$rightIndex];
        $rightIndex++;
    }
    return $combined;
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

$arr = mergeSort($arr);
echo implode(",", $arr);