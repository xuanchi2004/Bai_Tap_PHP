<?php
/*Viết chương trình:
Hàm được biểu diễn dưới dạng chuỗi Taylor của riêng nó. Tính giá trị gần đúng
của tổng của chuỗi vô hạn này. Kết thúc phép tính khi số hạng tiếp theo nhỏ
hơn một số nhất định về giá trị tuyệt đối x. Trong đó x = 10-k ở đây k là số tự
nhiên.
So sánh kết quả thu được với giá trị được tính bằng các hàm tiêu chuẩn.
Nhập các giá trị x và k từ bàn phím.
Đưa ra kế t quả có ba chữ số sau dấu thập phân*/

function taylorSeries($x, $k) {
    $result = 0;
    $n = 0;
    $tolerance = pow(10, -$k);

    do {
        $term = pow(-1, $n) * pow($x, 2 * $n) / factorial(2 * $n);
        $result += $term;
        $n++;
    } while (abs($term) > $tolerance);

    return $result;
}

function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Nhập giá trị x và k từ bàn phím
echo "Nhập giá trị x: ";
$x = floatval(trim(fgets(STDIN)));

echo "Nhập giá trị k: ";
$k = intval(trim(fgets(STDIN)));

// Tính giá trị bằng chuỗi Taylor
$result = taylorSeries($x, $k);

// In kết quả với ba chữ số sau dấu thập phân
printf("Kết quả: %.3f\n", $result);

// So sánh với hàm tiêu chuẩn
$standardResult = exp(-pow($x, 2) / 2);
$error = abs($standardResult - $result);
printf("Sai số so với hàm tiêu chuẩn: %.3e\n", $error);
