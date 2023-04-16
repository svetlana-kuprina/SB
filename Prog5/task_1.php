<?php

$str = "caesar cipher";
$kod = 18;
for ($i=0;$i<strlen($str);$i++) {
    if ($str[$i] == " ")
        continue;
    $ord = ord($str[$i]) + $kod;
    if ($ord > 122){
        $ord = 96 + ($ord - 122);
    }
    $str[$i] = chr($ord);
};
var_dump($str);

for ($i=0;$i<strlen($str);$i++) {
    if ($str[$i] == " ")
        continue;
    $ord = ord($str[$i]) - $kod;
    if ($ord < 97){
        $ord = 122 - (96 - $ord);
    }
    $str[$i] = chr($ord);
};
var_dump($str);
