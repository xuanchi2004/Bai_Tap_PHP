<?php
/**
 * 9.1 Viết chương trình nhập vào một số nguyên. Kiểm tra số đó nguyên dương hay nguyên âm. In ra màn hình kết quả
 */
$a = 5;
if($a >0){
  echo "la so nguyen dương";
}
  else if($a<0){
    echo " $a la so nguyen am"; 
  }
  else{ 
    echo "$a la so khong am khong duong";
  }
  echo "<br>";
  /**
   * Viết chương trình nhập vào một số nguyên n. Kiểm tra n chia hết cho 3 hay 5. In kết quả ra màn hình
   */
  $n = 15;

  if ($n % 3 == 0 && $n % 5 == 0) {
    echo "$n chia het cho 3 va 5";
} else if ($n % 3 == 0) {
    echo "$n chia het cho 3";
} else if ($n % 5 == 0) {
    echo "$n chia het cho 5";
} else {
    echo "$n khong chia het cho 3 va 5";
}
echo "<br>";
/**
 * Viế t chương trì nh nhậ p và o thá ng trong năm. In ra số ngà y củ a thá ng đó
 */
$thang = 5;

    if ($thang >= 1 && $thang <= 12) {
        $soNgay = cal_days_in_month(CAL_GREGORIAN, $thang, date("Y"));
        echo "Thang $thang nam " . date("Y") . " co $soNgay ngay.";
    } else {
        echo "Thang khong hop le. Vui long nhap thang tu 1 đen 12.";
    }
    echo "<br>";
    /**
     * Viế t chương trì nh giả i phương trì nh bậ c 2
     */
    $a = 2;
    $b = -5;
    $c = 3;

    // Tính delta
    $delta = $b * $b - 4 * $a * $c;

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phuong trinh co 2 nghiem phan biet:<br>";
        echo "x1 = $x1<br>";
        echo "x2 = $x2<br>";
    } else if ($delta == 0) {
        $x1 = -$b / (2 * $a);
        echo "Phuong trinh co nghiem kep:<br>";
        echo "x1 = x2 = $x1<br>";
    } else {
        echo "Phuong trinh khong co nghiem thuc.";
    }
    echo "<br>";
    /**
     * Viế t chương trì nh nhậ p và o 3 số a, b, c. Kiể m tra có phả i  là 3 cạ nh củ a mộ t tam giá c không?
     */
    $a = 3;
    $b = 4;
    $c = 5;

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Ba số $a, $b và $c tạo thành một tam giác.";
    } else {
        echo "Ba số $a, $b và $c không tạo thành một tam giác.";
    }
?>
