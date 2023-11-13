<?php
// Khai báo mảng
$array = array("a", "b", "c", "a", "b", "d", "e");

// Sử dụng hàm array_count_values() để đếm số lần xuất hiện của các phần tử
$count = array_count_values($array);

// In ra kết quả
print_r($count);
?>