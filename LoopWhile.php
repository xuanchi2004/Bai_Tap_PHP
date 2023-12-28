<?php
/**
 *11.1  Viế t chương trì nh tí nh tổ ng cá c số từ 1 đế n 100
 */
$i = 1;
$sum = 0;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "Tổng các số từ 1 đến 100 là: $sum";
echo "<br>";

/**
 *11.2  Viế t chương tì nh nhậ p và o mộ t số tự nhiên n. Tí nh tổ ng cá c số chia hế t cho 3 bé hơn n.
 */
$n = 20; // Ví dụ: n = 20

// Khởi tạo biến tổng và biến đếm
$sum = 0;
$i = 1;
while ($i < $n) {
    if ($i % 3 == 0) {
        $sum += $i;
    }
    $i++;
}
echo "Tổng các số chia hết cho 3 và bé hơn $n là: $sum";
 echo "<br>";

 /**
  * 11.3 Viế t chương trì nh in ra 100 số Fibonacci đầ u tiên.
  */
  $first = 0;
$second = 1;

// In hai số Fibonacci đầu tiên
echo "$first $second ";

// Số Fibonacci thứ ba (chưa được in ra)
$next = 0;

// Số lượng số Fibonacci đã in ra
$count = 2; // Đã in ra 2 số đầu tiên

// Sử dụng vòng lặp while để in ra 98 số Fibonacci còn lại
while ($count < 100) {
    $next = $first + $second;
    echo "$next ";

    // Di chuyển các giá trị sang phải trong dãy Fibonacci
    $first = $second;
    $second = $next;
    
    $count++;
}
echo "<br>";
 
/**
 * 11.4 Viế t chương trì nh kiể m tra mộ t số nguyên n có phả i là số
*polinom (số polinom là số đả o ngượ c đả o xuôi là mộ t. Ví dụ : 1256521), n nhậ p và o từ bà n phí m
 */
$n = 1256522; 

// Tạo một bản sao của n để sau này so sánh
$original = $n;

// Khởi tạo biến để lưu số đảo ngược
$reversed = 0;

// Sử dụng vòng lặp while để đảo ngược số n
while ($n > 0) {
    $reversed = $reversed * 10 + $n % 10;
    $n = (int)($n / 10);
}

// So sánh số đảo ngược với số gốc
if ($reversed === $original) {
    echo "$original là số palindromic.";
} else {
    echo "$original không là số palindromic.";
}
echo "<br>";

/**
 * Viế t chương trì nh liệ t kê cá c số từ 100 đế n 999 có tổ ng cá c chữ số chia hế t cho 3.
*Ví dụ : 263 có tổ ng: 2 + 6 + 3 = 9 chia hế t cho 3, 135 có 1 + 3 + 5 = 9 chia hế t cho 3
 */

?>