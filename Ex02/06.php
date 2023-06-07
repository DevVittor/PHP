<?php

/*Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o 
usuário.*/

class Area
{
    public function calculo($b, $h)
    {
        return $b * $h / 2;
    }
}

$resultado = new Area();
$result = $resultado->calculo(2, 5);

echo "Área: " . $result;
