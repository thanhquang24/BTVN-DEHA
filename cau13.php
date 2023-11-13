<?php
// Khai báo mảng
$array = array("a", "b", "c", "a", "b", "d", "e");

// Sử dụng hàm array_unique() để loại bỏ các phần tử trùng lặp
$unique = array_unique($array);

// In ra mảng sau khi loại bỏ các phần tử trùng lặp
print_r($unique);
?>