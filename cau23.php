<?php
// Nhập số cần kiểm tra
echo "Nhập số: ";
$n = 24;

// Hàm kiểm tra số hoàn hảo
function isPerfect($n) {
  $sum = 0; // Biến lưu tổng các ước số
  for ($i = 1; $i < $n; $i++) { // Duyệt qua các số từ 1 đến n - 1
    if ($n % $i == 0) { // Nếu i là ước số của n
      $sum += $i; // Cộng dồn i vào tổng
    }
  }
  return $sum == $n; // Trả về true nếu tổng bằng n, false nếu không
}

// Kiểm tra kết quả
if (isPerfect($n)) {
  echo "$n là số hoàn hảo\n";
} else {
  echo "$n không phải là số hoàn hảo\n";
}
?>