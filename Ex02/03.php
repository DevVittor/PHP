<?php

/*Faça um script que peça dois números e imprima a soma.*/

class Fazer
{
    public function calcular($num1, $num2)
    {
        return $num1 + $num2;
    }
}
$resultado = new Fazer();
$result = $resultado->calcular(20, 10);

echo $result;
