<?php

$depozitItog = $depozit = 100000;
$stavkaProcent = 8;
$procentPlus = $god = 0;
while ($depozitItog < ($depozit*2)) {
    $god++;
    $procentPlus++;
    //Весь вопрос в понятии формулировки каждые три года.
    //Допустим 2020 год положили и каждые три года будет 2024 год
    if ($procentPlus > 3) {
        $stavkaProcent += 2;
        $procentPlus = 0;
    };
    $depozitItog = $depozitItog * (1+$stavkaProcent/100);
};
var_dump("Год нахождения депозита в банке - ".$god);
var_dump("Итоговый размер депозита - ".$depozitItog);