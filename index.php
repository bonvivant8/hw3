<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
var_dump(count($arr));
echo "<br>";

$input = $arr;
$output1 = array_slice($input, 4, 9);
$output2 = array_slice($input, 0, 4);
$result = array_merge($output1, $output2);
print_r($result);
echo "<br>";

echo "sum(arr)=" . array_sum(array_slice($arr, 3, 3)) . "<br>";

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,

];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
$result = array_diff($secondArr, $firstArr);
print_r($result);
echo "<br>";
$result = array_diff($firstArr, $secondArr);
print_r($result);
echo "<br>";
$result = array_intersect($firstArr, $secondArr);
print_r($result);
echo "<br>";
$intersect = array_intersect($firstArr, $secondArr);
$result = array_merge(array_diff($firstArr, $intersect), array_diff($secondArr, $intersect));
print_r($result);
$firstArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,

    ],

];
