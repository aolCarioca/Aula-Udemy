<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

   <?php

        $nome = 'Jorge';
        $cor = 'verde';
        $idade = 29;
        $atividade_preferida = 'jogar videogame';
        
        //operador .

        echo 'Olá ' . $nome . ', vi que a sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;  

        //aspa dupla

        echo "<br />";

        //Utilizando aspas duplas no lugar do . para concatenar
        echo "Olá $nome, vi que a sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida "

   ?>

</body>
</html>