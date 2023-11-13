<?php
// Cho 1 số n
$n = 7;

// Khởi tạo biến kết quả bằng 1
$result = 1;

// Sử dụng vòng lặp for để tính giai thừa
for ($i = 1; $i <= $n; $i++) {
  $result *= $i;
}

// In ra kết quả
echo "Cho số nguyên dương: $n\n";
echo "Giai thừa của $n là: $result\n";
?>