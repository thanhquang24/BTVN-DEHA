<?php
// Hàm để tìm số chính phương trong một khoảng cho trước
function find_perfect_squares($a, $b) {
  // Khởi tạo một mảng rỗng để lưu kết quả
  $result = array();
  // Tìm số chính phương nhỏ nhất lớn hơn hoặc bằng a
  $start = ceil(sqrt($a));
  // Tìm số chính phương lớn nhất nhỏ hơn hoặc bằng b
  $end = floor(sqrt($b));
  // Duyệt qua các số từ start đến end
  for ($i = $start; $i <= $end; $i++) {
    // Thêm bình phương của i vào mảng kết quả
    $result[] = $i * $i;
  }
  // Trả về mảng kết quả
  return $result;
}

// Một số ví dụ
$examples = array(array(10, 50), array(100, 200), array(1, 1000));
// Duyệt qua các ví dụ
foreach ($examples as $example) {
  // Gọi hàm và in kết quả
  echo "Các số chính phương trong khoảng từ " . $example[0] . " đến " . $example[1] . " là: ";
  print_r(find_perfect_squares($example[0], $example[1]));
  echo "\n";
}
?>