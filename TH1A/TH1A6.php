<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

// Duyệt qua mảng $keys và tạo mảng $keysAndValues với key là giá trị của $keys và value là giá trị của $values tương ứng
$keysAndValues = array();
foreach ($keys as $key => $value) {
    $keysAndValues[$value] = $values[$key . "value"];
}

// Hiển thị kết quả
print_r($keysAndValues);