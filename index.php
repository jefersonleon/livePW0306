<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIVE - 02/03</title>
    </head>
    <body>
        <div class="container">
            <h1>LIVE - PROGRAMAÇÃO WEB</h1>
            <form method="get">
                <h2> Avalie o seu IMC </h2>
                <h3>Nome:</h3>
                <input type="text" name="txtNome" placeholder="Insira seu nome aqui">
                <h3>Peso:</h3>
                <input type="number" name="txtPeso" step="any">
                <h3>Altura:</h3>
                <input type="number" name="txtAltura"  step="any"><br><br>
                <input type="submit" value="Avaliar" />
            </form>
            <?php
            if ($_GET) {
                $nome = $_GET['txtNome'];
                $peso = $_GET['txtPeso'];
                $altura = $_GET['txtAltura'];
                $imc = $peso / ($altura * $altura);
                echo '<h3>' . $nome . ', o seu IMC é:' . $imc . '<br>';
                echo 'Meu nome é ' . $nome . ' o meu peso é de ' . $peso . ' Kg e a minha altura é de ' . $altura . ' m </h3>';
                if ($imc < 18.5) {
                    echo $nome . ' seu resultado avaliativo do IMC te considera abaixo do peso (mosquito)';
                } else if ($imc >= 18.5 && $imc < 25) {
                    echo $nome . ' seu resultado avaliativo do IMC te considera com o peso normal';
                } else if ($imc >= 25 && $imc < 30) {
                    echo $nome . ' seu resultado avaliativo do IMC te considera com sobrepeso (te cuida)';
                } else if ($imc >= 30 && $imc < 35) {
                    echo $nome . ' seu resultado avaliativo do IMC te considera com obesidade grau 1 (Ferrou!)';
                } else if ($imc >= 35 && $imc < 40) {
                    echo $nome . ' seu resultado avaliativo do IMC te considera com obesidade grau 2 (foi pras cucuias)';
                } else {
                    echo $nome . ' seu resultado avaliativo do IMC te considera com obesidade grau - Mórbida (a casa caiu)';
                }
                /*
                  Menos do que 18,5 	Abaixo do peso
                  Entre 18,5 e 24,9	Peso normal
                  Entre 25 e 29,9	Sobrepeso
                  Entre 30 e 34,9	Obesidade grau 1
                  Entre 35 e 39,9	Obesidade grau 2
                  Mais do que 40	Obesidade grau 3
                 */
            }
            ?>
        </div>
    </body>
</html>