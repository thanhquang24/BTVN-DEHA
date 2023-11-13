<?php
// Khai báo mảng
$array = array("a", "b", "c", "d", "e");

// Tìm vị trí của phần tử "c" trong mảng
$position = array_search("c", $array);

// Kiểm tra kết quả
if ($position !== false) {
  echo "Phần tử 'c' có vị trí là: $position\n";
} else {
  echo "Không tìm thấy phần tử 'c' trong mảng\n";
}
?>