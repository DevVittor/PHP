<?php

/*Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:
a) o produto do dobro do primeiro com metade do segundo .
b) a soma do triplo do primeiro com o terceiro.
c) o terceiro elevado ao cubo.

class Pegar
{
    public function calcule(int $n1, int $n2)
    {
        return  "O dobro do primeiro " . ($n1 * 2) . " Metado do segundo " . $n2 / 2;
    }
}

$resultado = new Pegar();
$result = $resultado->calcule(10, 20);

echo $result;

class Pegar
{
    public function calcule(int $n1, int $n3)
    {
        return ($n1 * 3) + $n3;
    }
}

$resultado = new Pegar();
$result = $resultado->calcule(10, 20);

echo $result;*/


class Pegar
{
    public function calcule(int $n3)
    {
        return $n3 ** 2;
    }
}

$resultado = new Pegar();
$result = $resultado->calcule(10);

echo $result;
