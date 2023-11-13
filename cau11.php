<?php
// Nhập số cần kiểm tra
$number = 371;
echo "Nhập số: $number ";

// Tách số thành các chữ số riêng lẻ
$digits = array(); // Mảng lưu các chữ số
$temp = $number; // Biến tạm để lưu số
while ($temp > 0) {
  $digit = $temp % 10; // Lấy chữ số cuối cùng
  $digits[] = $digit; // Thêm chữ số vào mảng
  $temp = (int) ($temp / 10); // Loại bỏ chữ số cuối cùng
}

// Tính số chữ số của số
$count = count($digits);

// Tính tổng các lũy thừa của các chữ số
$sum = 0; // Biến lưu tổng
foreach ($digits as $digit) {
  $sum += pow($digit, $count); // Cộng dồn lũy thừa của chữ số
}

// So sánh tổng với số ban đầu
if ($sum == $number) {
  echo "$number là số Armstrong\n";
} else {
  echo "$number không phải là số Armstrong\n";
}
?>