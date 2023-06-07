<?php

/*Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou 
divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em 
cada um dos números. */

class Operar
{
    private $calculo;

    public function calcular()
    {
        $num1 = filter_input(INPUT_POST, "NUM1");
        $num2 = filter_input(INPUT_POST, "NUM2");
        $op = filter_input(INPUT_POST, "operador");
        if ($op == "*") {
            $this->calculo = $num1 * $num2;
        } elseif ($op == "/") {
            $this->calculo = $num1 / $num2;
        } elseif ($op == "+") {
            $this->calculo = $num1 + $num2;
        } elseif ($op == "-") {
            $this->calculo = $num1 - $num2;
        } elseif ($op == "%") {
            $this->calculo =  $num1 % $num2;
        } else {
            return 'Valor da operação inválido !';
        }
        return $this->calculo;
    }
}

$result = new Operar();
$resultado = $result->calcular();

?>

<html>

<head>
    <title>Calculadora</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="NUM1" id="">
        <select name="operador" id="">
            <option value="Operador" disabled selected>Operador</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="%">%</option>
        </select>
        <input type="number" name="NUM2" id="">
        <input type="submit" value="Calcular">
    </form>
    <h2>Resultado: <?php echo $resultado; ?></h2>
</body>

</html>