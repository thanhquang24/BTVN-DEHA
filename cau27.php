<?php
// Hàm để tìm số âm lớn nhất trong một mảng
function find_max_negative($array) {
  // Khởi tạo biến max_negative với giá trị dương vô cùng
  $max_negative = INF;
  // Duyệt qua các phần tử của mảng
  foreach ($array as $element) {
    // Nếu phần tử là số âm và nhỏ hơn max_negative
    if ($element < 0 and $element < $max_negative) {
      // Cập nhật max_negative bằng phần tử đó
      $max_negative = $element;
    }
  }
  // Trả về max_negative
  return $max_negative;
}

// Một mảng ví dụ
$array = array(-2, 5, -7, 9, 4, -6, 8);
// Gọi hàm và in kết quả
echo "Số âm lớn nhất trong mảng là: " . find_max_negative($array);
?>