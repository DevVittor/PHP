<?php

/*Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso 
ideal, usando a seguinte fórmula: (72.7*altura) - 58*/

class Entrada
{
    private $mod;
    public function calcular(float $altura)
    {
        $this->mod = (72.7 * $altura) - 58;
        return $this->mod = number_format($this->mod, 1, ",", ".");
    }
}

$resultado = new Entrada();
$result = $resultado->calcular(1.94);

echo $result;


