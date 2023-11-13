<?php
// Nhập hai số a và b là đầu và cuối của khoảng
echo "Nhập số a: ";
$a = 1;
echo "Nhập số b: ";
$b = 20;

// Định nghĩa hàm kiểm tra số nguyên tố
function isPrime($n) {
  // Nếu n < 2 thì không phải số nguyên tố
  if ($n < 2) {
    return false;
  }
  // Kiểm tra các số từ 2 đến căn bậc hai của n
  for ($i = 2; $i <= sqrt($n); $i++) {
    // Nếu n chia hết cho i thì không phải số nguyên tố
    if ($n % $i == 0) {
      return false;
    }
  }
  // Nếu không thì là số nguyên tố
  return true;
}

// Duyệt qua các số từ a đến b
for ($i = $a; $i <= $b; $i++) {
  // Nếu i là số nguyên tố thì in ra
  if (isPrime($i)) {
    echo "$i là số nguyên tố\n";
  }
}
?>