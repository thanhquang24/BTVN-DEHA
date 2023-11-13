<?php
// Nhập số n
echo "Cho một số nguyên dương n: ";
$n = 9;

// Cách 1: Sử dụng công thức toán học
// Tổng S(n) = n*(n+1)/2
$sum = $n * ($n + 1) / 2;
echo "Tổng của các số từ 1 đến $n là: $sum\n";

// Cách 2: Sử dụng vòng lặp for
// Khởi tạo biến sum = 0
// Lặp từ i = 1 đến n, cộng dồn i vào sum
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
  $sum += $i;
}
echo "Tổng của các số từ 1 đến $n là: $sum\n";
?>