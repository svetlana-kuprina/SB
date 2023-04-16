<?php

$a=rand(0,1);
var_dump($a);
$b= $a==0 ? NULL :rand(1,3);
var_dump($b);

switch ($b) {
    case NULL:
        echo "Значение NULL";
        break;
    case 1:
        echo "Значение 1";
        break;
    default:
        echo "Значение 2 или 3";
}

var_dump(isset($b));

$c=is_null($b)? rand(20,30) : $b;
var_dump($c);