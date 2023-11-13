<?php
// Khai báo mảng
$array = array("a", "b", "c", "d", "e");

// Chèn phần tử "x" vào vị trí thứ 2
array_splice($array, 2, 0, "x");

// In ra mảng sau khi chèn
print_r($array);
?>