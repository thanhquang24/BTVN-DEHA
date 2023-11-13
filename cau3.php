<?php
// Tạo bảng HTML
echo "<table border=\"1px\">";
// Vòng lặp ngoài từ 1 đến 10
for ($i = 1; $i <= 10; $i++) {
  // Tạo một hàng mới
  echo "<tr>";
  // Vòng lặp trong từ 1 đến 10
  for ($j = 1; $j <= 10; $j++) {
    // Tạo một ô mới
    echo "<td>";
    // In ra kết quả của phép nhân
    echo "$i x $j = " . ($i * $j);
    // Kết thúc một ô
    echo "</td>";
  }
  // Kết thúc một hàng
  echo "</tr>";
}
// Kết thúc bảng HTML
echo "</table>";
?>