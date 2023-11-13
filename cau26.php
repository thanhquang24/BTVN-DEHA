<?php
// Hàm để tìm số dương lớn nhất trong một mảng
function find_max_positive($array) {
  // Khởi tạo biến max_positive với giá trị 0
  $max_positive = 0;
  // Duyệt qua các phần tử của mảng
  foreach ($array as $element) {
    // Nếu phần tử là số dương và lớn hơn max_positive
    if ($element > 0 and $element > $max_positive) {
      // Cập nhật max_positive bằng phần tử đó
      $max_positive = $element;
    }
  }
  // Trả về max_positive
  return $max_positive;
}

// Một mảng ví dụ
$array = array(-2, 5, -7, 9, 4, -6, 8);
// Gọi hàm và in kết quả
echo "Số dương lớn nhất trong mảng là: " . find_max_positive($array);
?>