<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        //variável do tipo string
        $nome = 'Jorge Sant Ana';

        //int
        $idade = 29;

        //float
        $peso = 82.5;

        //booleana
        $fumante_sn = true; //(true = 1) ou (false = vazio)

        //... Lógica .... //

        $idade = '30'; 


    ?>
    <h1>Ficha Cadastral</h1>
    <br />
    <p>Nome:   <?= $nome ?></p>
    <p>Idade:  <?= $idade ?></p>
    <p>Peso:   <?= $peso ?></p>
    <p>Fumate: <?= $fumante_sn ?></p>

</body>
</html>