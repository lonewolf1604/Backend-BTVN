<?php
// Input
$n = 100;
echo '<p>Cho n = ' . $n . '</p>';
$sum = 0;
for ((int)$i = 1; $i <= $n; $i++){
    $sum += $i; 
}
echo '<p>Tổng từ 1 đến ' .$n. ' là: ' .$sum. '</p>';