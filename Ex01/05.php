<?php

ini_set('display_errors', true);
ini_set('error_log', true);

error_reporting(E_ALL);


/*Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. */

class Descubra
{
    public function checar($num)
    {
        return ($num % 2 == 0) ? "O número {$num} é par" : "O número {$num} é impar";
    }
}

$resultado = new Descubra();
echo $resultado->checar(31);
