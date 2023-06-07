<?php

/*Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a 
idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou 
Fulano não é maior de 18 e tem XX Anos.*/

class Checar
{
    public function verificar(string $nome, int $idade)
    {
        return ($idade >= 18) ? "{$nome} com {$idade} você já é considerado maior de idade!"
            : "{$nome} com {$idade} você é considerado menor de idade!";
    }
}

$resultado = new Checar();
echo $resultado->verificar('Vittor', 40);
