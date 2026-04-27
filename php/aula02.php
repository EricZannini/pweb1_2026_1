<?php 

$pessoas = [
    ["nome"=>"Eric Zannini", "idade"=>18],
    ["nome"=>"Seu Madruga", "idade"=>56],
    ["nome"=>"Kiko", "idade"=>8],
];

foreach($pessoas as $key => $item) {
    $nome = $item['nome'];
    $idade = $item['idade'];
    echo "Indice: $key Nome:$nome Idade: $idade <br>";
}

?>