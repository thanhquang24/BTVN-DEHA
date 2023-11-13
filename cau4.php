<?php
// Nhập chuỗi cần kiểm tra
echo "Cho một chuỗi: ";
$str = 'Tình yêu đã phai mờ như hoa nở không màu';

// Nhập từ cần tìm
echo "Cho từ: ";
$word = 'phai mờ';

// Kiểm tra xem chuỗi có chứa từ hay không
$pos = strpos($str, $word);
if ($pos !== false) {
  echo "Chuỗi có chứa từ $word";
} else {
  echo "Chuỗi không chứa từ $word";
}
?>