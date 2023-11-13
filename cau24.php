<?php
// Hàm để tìm số lẻ lớn nhất trong một mảng
function find_max_odd($array) {
  // Khởi tạo biến max_odd với giá trị âm vô cùng
  $max_odd = -INF;
  // Duyệt qua các phần tử của mảng
  foreach ($array as $element) {
    // Nếu phần tử là số lẻ và lớn hơn max_odd
    if ($element % 2 == 1 and $element > $max_odd) {
      // Cập nhật max_odd bằng phần tử đó
      $max_odd = $element;
    }
  }
  // Trả về max_odd
  return $max_odd;
}

// Một mảng ví dụ
$array = array(2, 5, 7, 9, 4, 6, 8);
// Gọi hàm và in kết quả
echo "Số lẻ lớn nhất trong mảng là: " . find_max_odd($array);
?>