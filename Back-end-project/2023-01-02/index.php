<?php 
// BT01
echo '<h2>Bài tập 01:</h2>';
echo '<p>Nhập mức lương: </p>';
// Input
$salary = 15000000;
$incomeTax = 0;

// algorithm
if ($salary > 15000000) {
    $incomeTax = $salary*30/100;
} elseif ($salary >= 7000000){
    $incomeTax = $salary*20/100;
} elseif ( $salary >= 0){
    $incomeTax = $salary*10/100;
} else {
    echo '<p>Mức lương không hợp lệ, vui lòng nhập lại!</p>';
}
$standardSalary = $salary - $incomeTax;

// Hiển thị kết quả - Output:
echo '<p><b>Lương là: </b>' .$salary. ' BTC</p>';
echo '<p><b>Thuế thu nhập là: </b>' .$incomeTax. ' BTC </p>';
echo '<p><b>Tiền lương thực nhận là: </b>' . $standardSalary . ' BTC</p>';
echo '<hr>';    
// 
// 
// BT02 
echo '<h2>Bài tập 02:</h2>';
echo '<p>Nhập độ tuổi: </p>';
// Input
$age = 16;
echo '<p><b>Tuổi = </b>' . $age . '</p>';

// Output
if ($age > 150) {
    echo '<p><b>Tiền bối đã </b>' . $age . ' tuổi và đã dư tuổi vào lớp 10. Xin tiền bối chỉ cho tiểu bối bí kíp tu tiên!</p>';
} elseif ($age >= 16) {
    echo '<p><b>Bạn đã </b>' . $age . ' tuổi và đã đủ tuổi vào lớp 10</p>';
} elseif ($age >= 0) {
    echo '<p><b>Đồng chí đã </b>' . $age . ' tuổi nhưng chưa đủ tuổi vào lớp 10</p>';
} else {
    echo '<p><b>Độ tuổi không hợp lệ!</b></p>';
}
echo '<hr>';
// 
// 
// BT3
echo '<h2>Bài tập 03:</h2>';
echo '<p>Nhập a, b, c: </p>';

// Input:
$a = 51;
$b = 19;
$c = 200;
echo '<p>a = ' . $a . '; b = ' . $b . '; c = ' . $c . '</p>';

// algorithm
$max = $a;
if ($max >= $b) {
    $max = $max;
    if ($max >= $c) {
        $max = $max;
    } else {
        $max = $c;
    }
} elseif ($b >= $c) {
    $max = $b;
} else {
    $max = $c;
}

// Output:
echo '<p><b>Số lớn nhất là: </b>' .$max. ' </p>';
echo '<hr>';

// 
// 
// BT 04
echo '<h2>Bài tập 04:</h2>';
echo '<p>Nhập a, b: </p>';

// Input
$a = 9;
$b = 100;
echo '<p><b>Số a trước hoán vị là: </b>' . $a . '</p>';
echo '<p><b>Số b trước hoán vị là: </b>' . $b . '</p>';

// algorithm
$a += $b;
$b = $a - $b;
$a = $a - $b; 

// Output
echo '<p><b>Số a sau hoán vị là: </b>' . $a . '</p>';
echo '<p><b>Số b sau hoán vị là: </b>' . $b . '</p>';
echo '<hr>';

// 
// 
// BT 04
echo '<h2>Bài tập 05:</h2>';
echo '<p>Nhập các điểm: </p>';

// input
$diemKT = 0;
echo '<p><b>Điểm bài kiểm tra: </b>' .$diemKT. '</p>';
$diemGK = 10;
echo '<p><b>Điểm bài giữa kì: </b>' .$diemGK. '</p>';
$diemCK = 6.0;
echo '<p><b>Điểm bài cuối kì: </b>' .$diemCK. '</p>';
$rank = '';

// algorithm
if ($diemKT < 0 || $diemGK < 0 || $diemCK < 0 || $diemKT > 10 || $diemGK > 10 || $diemCK > 10 ){
    echo '<p><b>Điểm không hợp lệ theo thang điểm 10!</b></p>';
} elseif ($diemKT == 0 || $diemGK < 2) {
    echo '<p><b>Điểm trung bình là: ' . $diemTB . ' và đạt hạng F </b></p>';
} else {
    $diemTB = ($diemKT + $diemGK * 2 + $diemCK * 3) / 6;
    if ($diemTB >= 9){
        $rank = 'A';
    } elseif ($diemTB >= 7) {
        $rank = 'B';
    } elseif ($diemTB >= 5) {
        $rank = 'C';
    } else {
        $rank = 'F';
    }
    // Output
    echo '<p><b>Điểm trung bình là: ' . $diemTB . ' và đạt hạng ' . $rank . '</b></p>';
}
