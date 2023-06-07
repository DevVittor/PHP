<?php

/*Faça um script que peça um número e então mostre a mensagem O número informado foi [número].*/

class Mostrar
{
    private $num;
    public function mensagem()
    {
        return $this->num = filter_input(INPUT_POST, "num");
    }
}

$result = new Mostrar();
$resultado = $result->mensagem();

?>

<html>

<head>
    <title>Pegar e mostrar valor</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="num" id="" placeholder="Digite um número">
        <input type="submit" value="Enviar">
    </form>
    <h1>Número: <?php echo $resultado; ?></h1>
</body>

</html>