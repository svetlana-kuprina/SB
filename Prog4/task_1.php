<?php

$email = "hello@skillbox.ru";
$pos = strpos($email,'@');
var_dump(substr($email,$pos+1));