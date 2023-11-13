<?php
// Hàm để kiểm tra xem một số có phải là số nguyên tố hay không
function is_prime($n) {
  // Nếu n nhỏ hơn 2, trả về false
  if ($n < 2) {
    return false;
  }
  // Nếu n bằng 2, trả về true
  if ($n == 2) {
    return true;
  }
  // Nếu n chia hết cho 2, trả về false
  if ($n % 2 == 0) {
    return false;
  }
  // Duyệt qua các số lẻ từ 3 đến căn bậc hai của n
  for ($i = 3; $i <= sqrt($n); $i += 2) {
    // Nếu n chia hết cho i, trả về false
    if ($n % $i == 0) {
      return false;
    }
  }
  // Nếu không có ước số nào khác 1 và n, trả về true
  return true;
}

// Một số ví dụ
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// Duyệt qua các số trong mảng
foreach ($numbers as $number) {
  // Gọi hàm và in kết quả
  echo "Số $number có phải là số nguyên tố hay không? " . (is_prime($number) ? "Có" : "Không") . "\n";
}
?>