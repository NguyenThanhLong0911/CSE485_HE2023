<?php
//BT2
$Sarrs = ['dö', 'xanh', 'cam', 'trång'];

// Tạo mảng chứa các tên yêu thích tương ứng với mỗi màu
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

// Tạo mảng chứa các câu văn tương ứng với mỗi màu
$sentences = [];
for ($i = 0; $i < count($Sarrs); $i++) {
    $sentences[] = "màu yêu thích của $names[$i] là màu $Sarrs[$i]";
}

// Tạo câu văn kết hợp các câu văn trên
$final_sentence = "Màu đỏ là " . $sentences[0] . ", " . $sentences[1] . ", " . $sentences[2] . ", còn " . $sentences[3] . " là " . $Sarrs[3];

// Hiển thị câu văn kết quả
echo $final_sentence;