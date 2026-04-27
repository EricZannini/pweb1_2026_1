<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "Olá Mundo PHP";

        $nome = "Eric";
        $idade = "18";

        echo " - Nome: $nome - Idade: $idade";

        if($idade < 18){
            echo " - Menor de 18 anos";
         } else{
            echo " - Maior de 18 anos";
         }

        $nomes = ["Maria", "Ronaldo", "Chaves"];

        echo "<br>";
        for($i = 0; $i < count($nomes); $i++) {
            echo $nomes[$i] . "<br>";
        }

        foreach ($nomes as $item){
            echo $item . "<br>";
        }

        echo"<br>";
        $carro = ['modelo'=>"Mustang", 'cor'=>"Branco", "ano" => 2026];

        echo $carro['modelo'] . " - Ano: " . $carro['cor'];

    ?>

    <p> Meu Site <?= $carro['modelo'] . " - Ano: " . $carro['cor']; ?></p>

    <?php 
        include "./aula02.php"
    ?>

</body>
</html>