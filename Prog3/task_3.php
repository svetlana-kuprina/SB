<?php

$a=rand(1,9);
$b=10*rand(1,3);
$c=$a*$b;
$c+=rand(1,100);
var_dump($a,$b,$c);

switch ($c) {
    case $c>=0 && $c<100:
        echo "Меньше 100";
        break;
    case $c>=100 && $c<200:
        echo "Меньше 200";
        break;
    case $c>=200 && $c<300:
        echo "Меньше 300";
        break;
    default:
        echo "Больше 300";
}