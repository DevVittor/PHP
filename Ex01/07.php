<?php


/*Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor 
da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.*/

class Verificar
{

    public function calcular($v1, $v2)
    {
        return ($v1 > $v2) ?  "O valor A: {$v1} é maior que o valor B: {$v2}" : "O valor B: {$v2} é maior que o valor A: {$v1}";
    }
}

$resultado = new Verificar();
echo $resultado->calcular(20, 30);
