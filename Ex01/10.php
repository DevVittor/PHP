<?php

/*Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora 
desse intervalo, informar que não existe mês com este número.*/

class Mes
{
    public function ler($i)
    {
        $mes = [
            "Janeiro", "Fevereiro",
            "Março", "Abril",
            "Maio", "Junho",
            "Julho", "Agosto",
            "Setembro", "Outubro",
            "Novembro", "Dezembro"
        ];
        return $mes[$i -= 1];
    }
}

$result = new Mes();
echo $result->ler(12);
