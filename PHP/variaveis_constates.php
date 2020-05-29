<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        //para cariar variáveis constante utiliza-se a função define() para parametrização de procedimentos
        define('BD_URL', 'endereco_bd_dev'); 
        define('BD_USUARIO', 'usuario_dev'); 
        define('BD_SENHA', 'senha_dev');

        //.. lógica .. //

        /*

        define('BD_URL', 'endereco_bd_prod'); ao tentar sobrepor a contante apresentou a seguinte mensagem 
        => Notice: Constant BD_URL already defined in C:\xampp\htdocs\variaveis_constates.php on line 18
        
        */ 
        
        echo BD_URL . '<br />';
        echo BD_USUARIO . '<br />';
        echo BD_SENHA


    ?>

</body>
</html>