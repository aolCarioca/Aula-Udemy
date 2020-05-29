<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        //sequeciais (numéricos)
       
         /*
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

        $lista_frutas[] = 'Abacaxi';

       
        echo '<pre>';
            var_dump($lista_frutas);
        echo '<pre>';
        echo '<hr />';
        echo '<pre>';
            print_r($lista_frutas);
        echo '<pre>';
        
        echo $lista_frutas[2];
        */

        //associativo

        $lista_frutas = [
            'a' => 'Banana',
            'b' => 'Maçã',
            'x' => 'Morango',
            'z' => 'Uva',
            '2' =>'Abacate'
        ];

        $lista_frutas['w'] = 'Abacaxi';

        echo '<pre>';
        var_dump($lista_frutas);
        echo '<pre>';

        echo '<hr />';
        
        echo $lista_frutas['w'];

  
    ?>
        
</body>
</html>