<?php

/*Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação 
aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".*/

class Valores
{
    public function valores($A, $B)
    {
        return ($A > $B) ? "{$B}-{$A}" : "{$A}-{$B}";
    }
}

$result = new Valores();
echo $result->valores(40, 20);
