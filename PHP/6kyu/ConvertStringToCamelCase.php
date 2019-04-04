<?php
/**
 * Created by PhpStorm.
 * User: thocou
 * Date: 03/04/19
 * Time: 11:38
 */

function toCamelCase($str)
{
    $elements = explode('@', str_replace(['-', '_'], '@', $str));

    array_walk($elements, function (&$value, $key) {
        $value = $key !== 0 ? ucfirst($value) : $value;
    });

    return implode($elements);
}
