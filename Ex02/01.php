<?php

/*Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.
Para saber o valor do pi, use: M_PI (ele armazena o valor de pi)*/

class Perimetro
{
    public function area($r)
    {
        $pi = M_PI;
        $calculo = 2 * $pi * $r;
        return "C = " . $calculo = number_format($calculo, 2, ",", ".");
    }
}
$result = new Perimetro();
echo $result->area(2);
