<?php
// Nhập chuỗi cần kiểm tra
echo "Nhập chuỗi: ";
$str = 'racecar';

// Sử dụng hàm strrev() để đảo ngược chuỗi
$rev = strrev($str);

// So sánh chuỗi đảo ngược với chuỗi ban đầu
if ($rev == $str) {
  echo "Chuỗi '$str' là chuỗi Palindrome\n";
} else {
  echo "Chuỗi '$str' không phải là chuỗi Palindrome\n";
}
?>