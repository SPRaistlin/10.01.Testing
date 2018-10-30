<?php
/**
 * Created by PhpStorm.
 * User: mariano
 * Date: 30/10/18
 * Time: 8:29
 */

namespace App\Util;

class Calculadora
{
    public function suma($a, $b)
    {
        return $a + $b;
    }
    public function resta($a, $b)
    {
        return $a - $b;
    }
    public function multiplicacion($a, $b)
    {
        return $a * $b;
    }
    public function division($a, $b)
    {
        return $a/$b;
    }
}
