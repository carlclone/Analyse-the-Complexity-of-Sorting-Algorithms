<?php

/**
 * @param array $arr
 * @return array
 */
function selectionSort(array $arr): array {
    $len = count($arr);

    //最坏情况:n-1+n-2....+2+1,=n*(n-1)/2≈(n^2)/2次,O(n^2)
    for ($i = 0; $i < $len; $i++) {
        $min = $i;
        for ($j = $i+1; $j < $len; $j++) {
            if ($arr[$j] > $arr[$min]) {
                $min = $j;
            }
        }

        if ($min != $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
    }
    return $arr;
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

$sortedArray = selectionSort($arr);
echo implode(",", $sortedArray);
