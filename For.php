<?php
/**
 * 12.1 Viế t chương trì nh tí nh tổ ng cá c số từ 1 đế n 100
 */
$sum = 0;

// Sử dụng vòng lặp for để tính tổng các số từ 1 đến 100
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

// In tổng lên màn hình
echo "Tổng các số từ 1 đến 100 là: $sum";
 echo "<br>";

 /**
  * 12.2 Viế t chương tì nh nhậ p và o mộ t số tự nhiên n. Tí nh tổ ng cá c số chia hế t cho 3 bé hơn n
  */
  $n = 20; // Ví dụ: n = 20

// Khởi tạo biến tổng
$sum = 0;

// Sử dụng vòng lặp for để tính tổng các số chia hết cho 3 và bé hơn n
for ($i = 1; $i < $n; $i++) {
    if ($i % 3 == 0) {
        $sum += $i;
    }
}

// In tổng lên màn hình
echo "Tổng các số chia hết cho 3 và bé hơn $n là: $sum";
  echo "<br>";

  /**
  * 12.3 Viế t chương trì nh in ra 100 số Fibonacci đầ u tiên.
  */
  $fibonacci = array();

// Gán giá trị ban đầu cho hai số đầu tiên của dãy Fibonacci
$fibonacci[0] = 0;
$fibonacci[1] = 1;

// Sử dụng vòng lặp for để tính và lưu các số Fibonacci
for ($i = 2; $i < 100; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

// In ra 100 số Fibonacci đầu tiên
for ($i = 0; $i < 100; $i++) {
    echo $fibonacci[$i] . " ";
}
  echo "<br>";

  /**
  * Viế t chương trì nh kiể m tra mộ t số nguyên n có phả i là số\ 
  *polinom (số polinom là số đả o ngượ c đả o xuôi là mộ t. Ví dụ : 1256521), n nhậ p và o từ bà n phí m
  */
  $n = 1256521; // Ví dụ: n = 1256521

// Chuyển số nguyên thành chuỗi để dễ dàng xử lý
$n_str = (string)$n;

// Độ dài của chuỗi
$length = strlen($n_str);

// Khởi tạo biến kiểm tra palindromic
$is_palindromic = true;

// Sử dụng vòng lặp for để kiểm tra từng cặp chữ số
for ($i = 0; $i < $length / 2; $i++) {
    if ($n_str[$i] !== $n_str[$length - $i - 1]) {
        $is_palindromic = false;
        break;
    }
}

// Kiểm tra kết quả và in ra màn hình
if ($is_palindromic) {
    echo "$n là số palindromic.";
} else {
    echo "$n không là số palindromic.";
}
?>