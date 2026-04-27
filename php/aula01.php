<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Olá Mundo PHP! <br>";

    $nome = "Jackson Five";
    $idade = 16;

    echo "Nome: $nome - Idade: $idade";

    echo "<br>";
    if ($idade >= 18) {
        echo "De maior";
    } else {
        echo "De menor";
    }

    $notas = [5, 7, 10, 9];

    //print_r($notas);
    echo "<br>";
    for ($i = 0; $i < count($notas); $i++) {
        echo $notas[$i] . "<br>";
    }
    echo "<br>";
    foreach ($notas as $item) {
        echo $item . "<br>";
    }

    echo "<br>";

    $nomes = ["Jackson Five", "Maria", "Ellen", "Arthur"];
    echo "<br>";
    for ($i = 0; $i < count($nomes); $i++) {
        echo $nomes[$i] . "<br>";
    }
    echo "<br>";
    foreach ($nomes as $item) {
        echo $item . "<br>";
    }

    echo "<br>";
    $carro = ['modelo' => "Mustang", 'cor' => "Branco", "ano" => 2026];

    echo $carro['modelo'] . " - " . $carro['cor'];


    ?>

    <p> Meu site <?= $carro['modelo'] . " - Ano:" . $carro['ano'];  ?> </p>

    <?php
    include "./aula02.php";
    ?>

</body>

</html>