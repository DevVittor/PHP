<?php

/*Faça um script que peça 3 notas de um aluno e mostra sua média.*/

class Pedir
{
    public function media($n1, $n2, $n3)
    {
        return ($n1 + $n2 + $n3) / 3;
    }
}

$resultado = new Pedir();
$result = $resultado->media(5, 5, 5);

echo $result;
