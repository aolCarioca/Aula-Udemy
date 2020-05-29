<?php

    session_start();

    //estamos trabalhando  na montagem do texto 
    $titulo = str_replace('#', '-', $_POST['titulo']); 
    $categoria = str_replace('#', '-', $_POST['categoria']); 
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', $_POST); //desafio alterar str_replace pelo implode 
    
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //função nativa do php para abrir arquivo txt

    //abrindo arquivo 
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');
    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    // echo $texto;
    header('Location: abrir_chamado.php');


?>