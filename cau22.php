<?php
// Nhập hai số nguyên dương
echo "Nhập số a: ";
$a = 24;
echo "Nhập số b: ";
$b = 12;

// Sử dụng giải thuật Euclid để tìm USCLN
function uscln($a, $b) {
  if ($b == 0) return $a;
  return uscln($b, $a % $b);
}

// Sử dụng công thức để tìm BSCNN
function bscnn($a, $b) {
  return ($a * $b) / uscln($a, $b);
}

// In ra kết quả
echo "USCLN của $a và $b là: " . uscln($a, $b) . "\n";
echo "BSCNN của $a và $b là: " . bscnn($a, $b) . "\n";
?>