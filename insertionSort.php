<?php

/**
 * @param array $arr
 */
function insertionSort(array &$arr)
{
    //最坏情况:n-1+n....+2+1,=n*(n-1)/2≈(n^2)/2次,O(n^2)
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
}
