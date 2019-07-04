<?php

/**
 * @param $number
 * @return string
 */
function solution($number)
{
    $romanTable = [
        1000=>'M',
        900=>'CM',
        500=>'D',
        400=>'CD',
        100=>'C',
        90=>'XC',
        50=>'L',
        40=>'XL',
        10=>'X',
        9=>'IX',
        5=>'V',
        4=>'IV',
        1=>'I'
    ];

    $roman = '';
    foreach ($romanTable as $n => $r) {
        $m = (int)$number/$n;
        $roman .= str_repeat($r, $m);
        $number = $number%$n;
    }

    return $roman;
}
