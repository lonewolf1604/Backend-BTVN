<?php
$n = 10;
echo '<p>Cho n = ' . $n . '</p>';
echo '<p>' .$n. ' số Fibonaci dầu tiên là: </p>';
$i = 1;
$s = 1;
$s0 = 0;
$s1 = 1;
while ((int)$i <= $n){
    echo $s. ', ';
    $s = $s0 + $s1;
    $s0 = $s1;
    $s1 = $s;
    $i++;
}
/* for ((int)$i = 1; $i <= $n; $i++){
    echo $i. ', ';
} */
// a+b=s 
// 0+1=1 s0 = 0  = 0 + s1 = 1 = 1 => s = 1
// 1+1=2 s0 = s1 = 1 + s1 = s = 1 => s = 2
// 1+2=3 s0 = s1 = 1 + s1 = s = 2 => s = 2
// 2+3=5
// 3+5=8
echo '<br>1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89';