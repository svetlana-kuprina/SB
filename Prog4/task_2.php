<?php

$str = "Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море.";
$povtor = "море";
$povtor_perevorot = strrev($povtor);
$str = str_replace($povtor, $povtor_perevorot, $str);
