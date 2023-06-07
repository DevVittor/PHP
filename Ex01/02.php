<?php

/*Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de 
acordo com o número solicitado, ex: */

class Tabuada
{
    public function calcular($num)
    {
        for ($i = 1; $i <= 10; $i++) {
            echo "{$num} x {$i} =" . ($num * $i) . "\n </br>";
        }
    }
}

$resultado = new Tabuada();
$resultado->calcular(10);
