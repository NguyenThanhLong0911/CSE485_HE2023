<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

$value_b = $a['b']['o']['b'];
echo $value_b . "<br>"; // Kết quả là 3

$value_c = $a['a']['c'];
echo $value_c . "<br>"; // Kết quả là 1

$info_a = $a['a'];
print_r($info_a); // Kết quả là Array ( [b] => 0 [c] => 1 )