<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        //gettype() => retorna o tipo da varável
        $valor = true;
        //$valor2 = (real) $valor; //float, double, real
        //$valor2 = (string) $valor2; 
        
        //$valor2 = (int) $valor; //integer, int
        //$valor2 = (string) $valor;

        //$valor2 = (boolean) $valor; //bool, boolean

        //$valor2 = (int) $valor;

        $valor2 = (string) $valor;
        $valor3 = (int) $valor2;
        

        echo $valor . ' ' . gettype($valor);
        echo '<br />';
        echo $valor2 . ' ' .gettype($valor2);
        echo '<br />';
        echo $valor3 . ' ' .gettype($valor2);


    ?>
        
</body>
</html>