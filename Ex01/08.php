<?php

/*Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de 
três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou 
igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]*/

class Solicitar
{
    public function calcular(float $n1, float $n2, float $n3)
    {
        $media = ($n1 + $n2 + $n3) / 3;
        $media = number_format($media, 1);
        return ($media >= 6 && $media <= 10)
            ? "Você foi Aprovado com a nota {$media}"
            : "Você foi Reprovado com a nota {$media}";
    }
}

$result = new Solicitar();
echo $result->calcular(5, 4, 5);
