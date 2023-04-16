<?php

$ser = ["A","B"];
$nomer = "";
$arr_nomer = [];
for ($s1=0; $s1<2; $s1++) {
    for ($s2=0; $s2<2; $s2++){
        for ($s3=0; $s3<2; $s3++){
            for ($int=0; $int<1000; $int++){
                if ($int < 10)
                    $nomer = $ser[$s1]."00".$int.$ser[$s2].$ser[$s3];
                elseif ($int < 100)
                    $nomer = $ser[$s1]."0".$int.$ser[$s2].$ser[$s3];
                else
                    $nomer = $ser[$s1].$int.$ser[$s2].$ser[$s3];
                array_push($arr_nomer, $nomer);
            }
        };
    };
};
foreach ($arr_nomer as $value){
    echo $value."\n";
}
foreach ($arr_nomer as $key => & $val){
    if (($val[1]!=$val[2])  || ($val[2]!=$val[3]))
        unset($arr_nomer[$key]);
};
print_r($arr_nomer);