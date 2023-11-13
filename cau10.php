<?php
// Khai báo hai số a và b là đầu và cuối của khoảng
$a = 1;
$b = 50;

// Khởi tạo hai số Fibonacci đầu tiên
$f0 = 1;
$f1 = 1;

// Khởi tạo số Fibonacci tiếp theo
$fn = 1;
echo "Khai báo a: $a ";
echo "Khai báo b: $b ";

// Duyệt qua các số từ a đến b
for ($i = $a; $i <= $b; $i++) {
  // Nếu số đó bằng với fn, thì in ra số đó là số Fibonacci
  if ($i == $fn) {
    echo "$i là số Fibonacci\n";
  }
  // Cập nhật giá trị của f0, f1 và fn
  $f0 = $f1;
  $f1 = $fn;
  $fn = $f0 + $f1;
}
?>