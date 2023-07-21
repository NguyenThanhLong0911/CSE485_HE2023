<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
// Tìm chuỗi có độ dài lớn nhất và độ dài tương ứng
$max_length = 0;
$max_string = "";
foreach ($array as $value) {
    if (strlen($value) > $max_length) {
        $max_length = strlen($value);
        $max_string = $value;
    }
}

// Hiển thị kết quả
echo "Chuỗi lớn nhất là $max_string, độ dài = $max_length<br>";

// Tìm chuỗi có độ dài nhỏ nhất và độ dài tương ứng
$min_length = PHP_INT_MAX;
$min_string = "";
foreach ($array as $value) {
    if (strlen($value) < $min_length) {
        $min_length = strlen($value);
        $min_string = $value;
    }
}

// Hiển thị kết quả
echo "Chuỗi nhỏ nhất là $min_string, độ dài = $min_length";
