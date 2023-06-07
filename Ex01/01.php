<?php

/*Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".*/

class Verificado
{
	public function verificar($num)
	{
		$verificado = ($num <= 0) ? "O valor {$num} é Negativo" : "O valor {$num} é Positivo";
		return $verificado;
	}
}

$verificador = new Verificado();

echo $verificador->verificar(20);
