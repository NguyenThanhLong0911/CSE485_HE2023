<?php
// $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

// // Duyệt qua mảng và hiển thị các số từ 100 đến 200 và chia hết cho 5
// foreach ($array as $value) {
//     if ($value >= 100 && $value <= 200 && $value % 5 == 0) {
//         echo $value . " ";
//     }
// }

$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
$numbers = array_filter($array, function($number){
    return $number >=100 && $number <=200 && $number % 5 == 0;
});

print_r($numbers);
?>