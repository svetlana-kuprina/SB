<?php

$a=9;
$b=10*rand(1,3);
var_dump($a,$b);
if ($a*$b<100) {
    echo "меньше 100".'<br>';
}
else if ($a*$b<200){
    echo "меньше 200".'<br>';
}
else{
    echo "Больше 200".'<br>';
}

echo ($a * $b <100) ? "Меньше 100" : (($a * $b < 200 ? "Меньше 200" : "Больше 200"));