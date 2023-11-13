<?php
// Hàm để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
function is_substring($str1, $str2) {
  // Nếu độ dài của str1 lớn hơn độ dài của str2, trả về false
  if (strlen($str1) > strlen($str2)) {
    return false;
  }
  // Nếu str1 rỗng, trả về true
  if ($str1 == "") {
    return true;
  }
  // Duyệt qua các vị trí có thể của str1 trong str2
  for ($i = 0; $i <= strlen($str2) - strlen($str1); $i++) {
    // Nếu str1 trùng với một đoạn của str2 tại vị trí i, trả về true
    if (substr($str2, $i, strlen($str1)) == $str1) {
      return true;
    }
  }
  // Nếu không tìm thấy str1 trong str2, trả về false
  return false;
}

// Một số ví dụ
$examples = array(array("cat", "concatenate"), array("dog", "god"), array("hello", "world"), array("", "anything"));
// Duyệt qua các ví dụ
foreach ($examples as $example) {
  // Gọi hàm và in kết quả
  echo "Chuỗi " . $example[0] . " có phải là chuỗi con của chuỗi " . $example[1] . " hay không? " . (is_substring($example[0], $example[1]) ? "Có" : "Không") . "\n";
}
?>