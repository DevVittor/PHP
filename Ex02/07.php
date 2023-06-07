<?php

/*Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no 
mês. Calcule e mostre o total do seu salário no referido mês.*/

class Valor
{
    public function calculo($horasTrabalhada, $valorHora)
    {
        return ($horasTrabalhada + $valorHora) * 30;
    }
}
$resultado = new Valor();
$result = $resultado->calculo(36, 5);

echo "Meu salário: R$ " . $result;
