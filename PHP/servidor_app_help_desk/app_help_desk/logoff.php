<?php

    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover índices do array de sessão
    //unset()

    unset($_SESSION['x']); //para remover o índice apenas se exister

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir variável de sessão
    //session_destroy()

    session_destroy(); //será destruida 
    //forçar um direcionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');




?>