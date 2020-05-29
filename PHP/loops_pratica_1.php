<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        $registros = array(
            array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo de notícias 1'),
            array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo de notícias 2'),
            array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo de notícias 3'),
            array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo de notícias 4')
        );

        echo '<pre>';
            print_r($registros);
        echo '</pre>';

        echo '<br /><br /><br />';

       // $idx = 0;

        //count -> conta a quantidade de elementos de arrays

        echo 'O array possui: ' . count($registros) . ' registros';

        echo '<br />';

        /*
        while ($idx < count($registros)) {

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr />';
           
            $idx++; 
        }
        */
        
        /*
        do {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr />';
           
            $idx++; 
        } while ($idx < count($registros));
        */

        for ( $idx = 0; $idx < count($registros); $idx++) { 

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr />';
        }


    ?>
        
</body>
</html>