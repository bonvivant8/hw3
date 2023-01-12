<?php

$age=31;
const COMPARISON1=20;
const COMPARISON2=40;
const COMPARISON3=60;
const COMPARISON4=80;
{}
switch (true){
    case ($age<=COMPARISON1):
        echo "You are so young, just {$age} years old!<br/>";
        break;
    case ($age<=COMPARISON2):
        echo "You should live your best life, you are  just {$age} years old!<br/>";
        break;
    case ($age<=COMPARISON3):
        echo "You are so wise, already {$age} years old!<br/>";
        break;
    default:
        echo "You are still in a good shape,  {$age} years old!<br/>";
        break;
}




$lust_name=strlen('ZAKHZRIN');
const SMALL_SURNAME=5;
const MEDIUM_SURNAME=10;
const LARGE_SURNAME=15;

if ($lust_name<SMALL_SURNAME)
{
    echo "Довжина вашого прізвища дорівнює {$lust_name}, і вона менше ніж 5";
}
else if ($lust_name<MEDIUM_SURNAME)
{
    echo "Довжина вашого прізвища дорівнює {$lust_name}, і вона більша за 5 і менше ніж 15";
}
else
{
    echo "Довжина вашого прізвища дорівнює {$lust_name}, і вона більша за 15";
}

