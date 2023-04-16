<?php

$arr = [
    "a" => "word a",
    "b" => "word b",
    "c" => "word c",
];
$arr_key = array_keys($arr);
$arr_string = implode(" ",$arr_key);
echo $arr_string;