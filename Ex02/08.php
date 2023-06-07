<?php

/*Faça um script que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em 
graus Celsius.
C = (5 * (F-32) / 9).*/

class Graus
{
    public function temp($f)
    {
        $c = (5 * ($f - 32) / 9);
        return number_format($c, 1);
    }
}

$resultado = new Graus();
$result = $resultado->temp(110);

echo "Temperatura: {$result}°C";
