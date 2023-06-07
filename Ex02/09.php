<?php

/*Faça um script que peça a temperatura em graus Celsius, transforme e mostre em graus Farenheit.*/

class Graus
{
    private $convert;
    public function temp($c)
    {
        $this->convert = ($c * 9 / 5) + 32;
        return $this->convert = number_format($this->convert, 1, ",", ".");
    }
}

$resultado = new Graus();
$result = $resultado->temp(10);

echo "{$result}°F";
