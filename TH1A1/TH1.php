<?php
function sum_product_diff_quotient($arr) {
    $sum = $arr[0];
    $product = $arr[0];
    $diff = $arr[0];
    $quotient = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $sum += $arr[$i];
        $product *= $arr[$i];
        $diff -= $arr[$i];
        $quotient /= $arr[$i];
    }
    echo "Tổng các phần tử = " . $sum . "<br>";
    echo "Tích các phần tử = " . $product . "<br>";
    echo "Hiệu các phần tử = " . $diff . "<br>";
    echo "Thương các phần tử = " . $quotient . "<br>";
}
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
sum_product_diff_quotient($arrs);
?>