<?php
/**
 * 10.1 Viế t chương trì nh nhậ p và o mộ t số nguyên. Kiể m tra số đó nguyên dương hay nguyên âm. 
 * In ra mà n hì nh kế t quả
 */
$a = -5;
switch (true) {
    case $a > 0:
        echo "Số nguyên $a là số nguyên dương.";
        break;
    case $a < 0:
        echo "Số nguyên $a là số nguyên âm.";
        break;
    default:
        echo "Số nguyên $a không âm không dương (số 0).";
        break;
}
echo "<br>";

/**
 * 10.2 Viế t chương trì nh nhậ p và o mộ t số nguyên n. Kiể m tra n chia hế t cho 3 hay 5. In kế t quả ra mà n hì nh
 */
$n = 15;
switch (true) {
    case ($n % 3 == 0 && $n % 5 == 0):
        echo "Số $n chia hết cho cả 3 và 5.";
        break;
    case ($n % 3 == 0):
        echo "Số $n chia hết cho 3.";
        break;
    case ($n % 5 == 0):
        echo "Số $n chia hết cho 5.";
        break;
    default:
        echo "Số $n không chia hết cho cả 3 và 5.";
        break;
}
echo "<br>";

/**
 * 10.3 Viế t chương trì nh nhậ p và o thá ng trong năm. In ra số ngà y củ a thá ng đó
 */
$thang = 2; 

switch ($thang) {
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        $soNgay = 31;
        break;
    case 4: case 6: case 9: case 11:
        $soNgay = 30;
        break;
    case 2:
        
        $nam = date('Y'); 
        if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
            $soNgay = 29;
        } else {
            $soNgay = 28;
        }
        break;
    default:
        echo "Tháng không hợp lệ.";
        exit; 
}

echo "Tháng $thang có $soNgay ngày.";
echo "<br>";

/**
 *10.4  Viế t chương trì nh giả i phương trì nh bậ c 2
 */
$a = 2;
$b = -5; 
$c = 3; 

$delta = ($b * $b) - (4 * $a * $c);

switch (true) {
    case $delta > 0:
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có hai nghiệm phân biệt: x1 = $x1 và x2 = $x2.";
        break;
    case $delta == 0:
        $x = -$b / (2 * $a);
        echo "Phương trình có nghiệm kép: x = $x.";
        break;
    default:
        echo "Phương trình không có nghiệm thực.";
        break;
}
echo "<br>";

/**
 *10.5 Viế t chương trì nh nhậ p và o 3 số a, b, c. Kiể m tra có phả i là 3 cạ nh củ a mộ t tam giá c không?
 */
$a = 3;
$b = 4;
$c = 5;

switch (true) {
    case ($a + $b > $c && $a + $c > $b && $b + $c > $a):
        echo "Ba số $a, $b, $c tạo thành một tam giác.";
        break;
    default:
        echo "Ba số $a, $b, $c không tạo thành một tam giác.";
        break;
}
?>

