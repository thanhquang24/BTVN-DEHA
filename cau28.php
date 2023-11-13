<?php
// Hàm để tính tổng các số lẻ từ 1 đến n
function sum_odd($n) {
  // Khởi tạo biến sum với giá trị 0
  $sum = 0;
  // Duyệt qua các số lẻ từ 1 đến n
  for ($i = 1; $i <= $n; $i += 2) {
    // Cộng số lẻ vào sum
    $sum += $i;
  }
  // Trả về sum
  return $sum;
}

// Một số ví dụ
$numbers = array(5, 10, 15, 20);
// Duyệt qua các số trong mảng
foreach ($numbers as $number) {
  // Gọi hàm và in kết quả
  echo "Tổng các số lẻ từ 1 đến $number là: " . sum_odd($number) . "\n";
}
?>