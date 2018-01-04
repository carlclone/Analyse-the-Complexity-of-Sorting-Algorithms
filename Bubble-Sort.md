
```
//冒泡排序
function bubbleSort(array $arr): array {
    $count = 0;
    $len = count($arr);

    //最坏情况,循环了(n-1+n-2+...2+1)=n*(n-1)/2≈(n^2)/2次 , 忽略系数,时间复杂度O(n^2)
    for ($i = 0; $i < $len; $i++) {
	for ($j = 0; $j < $len - 1; $j++) {
	    $count++;
	    if ($arr[$j] > $arr[$j + 1]) {
		$tmp = $arr[$j + 1];
		$arr[$j + 1] = $arr[$j];
		$arr[$j] = $tmp;		
	    }
	}
    }   
    echo $count."\n";
    return $arr;
}
```

