<?php

$arr = [
    'Форрест Гамп' => ['драма', 'комедия', 'мелодрама'],
    'Назад в будущее' => ['фантастика', 'комедия', 'приключения'],
];
$arr_values = array_values($arr);
$arr_rez = array_merge($arr_values[0],$arr_values[1]);
$rezult = array_unique($arr_rez);
