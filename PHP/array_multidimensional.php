<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        //$lista_coisas = Array(); // Pode utilizado de ambas formas para criar lista de arrays
        $lista_coisas = []; 

        $lista_coisas['frutas'] = array('1'=>'Banana', '2'=> 'Maçã', '3'=> 'Morango', '4'=> 'Uva');
        $lista_coisas['pessoas'] = ['1'=> 'João', '2'=> 'José', '3'=>'Maria'];
        
        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo '<hr>';
        echo $lista_coisas['frutas'][3];
        echo '<br />';
        echo $lista_coisas['pessoas'][2];

  
    ?>
        
</body>
</html>