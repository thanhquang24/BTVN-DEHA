<?php
// Khai báo mảng
$array = array(10, 5, 8, 3, 7);

// Sử dụng hàm rsort() để sắp xếp mảng theo thứ tự giảm dần
rsort($array);

// Lấy phần tử thứ hai của mảng làm kết quả
$second_max = $array[1];

// In ra kết quả
echo "Số lớn thứ hai trong mảng là: $second_max\n";
?>