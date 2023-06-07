<?php

ini_set('display_errors', true);
ini_set('error_log', true);
error_reporting(E_ALL);

/*Tendo como dado de entrada a altura (h) de uma pessoa, construa um script que calcule seu peso 
ideal, utilizando as seguintes fórmulas:
a) Para homens: (72.7*h) - 58
b) Para mulheres: (62.1*h) - 44.7*/

class Dados
{
    public function calcular($altura, $escolha)
    {
        switch ($escolha) {
            case "m":
                $mod = (72.7 * $altura) - 68;
                return $mod = number_format($mod, 1, ",", ".");
                break;
            case "f":
                $mod = (62.1 * $altura) - 44.7;
                return $mod = number_format($mod, 1, ",", ".");
                break;
        }
    }
}
$escolha = filter_input(INPUT_POST, "sexo");
$altura = filter_input(INPUT_POST, "altura", FILTER_VALIDATE_FLOAT);
$resultado = new Dados();
$result = $resultado->calcular($altura, $escolha);

?>

<html>

<head>
    <title>Calcular Peso</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="altura" min="0" pattern="[0-9]+([.,][0-9]+)?" id="" required placeholder=" Qual é a sua altura ?">
        <select name="sexo" id="" required>
            <option selected disabled>Escolha</option>
            <option value="m">Homem</option>
            <option value="f">Feminino</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <h2>Gênero: <?php echo ($escolha == "m") ? "Masculino" : "Feminino"; ?></h2>
    <h4>Peso: <?php echo $result; ?></h4>
</body>

</html>