<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        /*    
        $array = array();
        $retorno = is_array($array);

        if ($retorno) {
            echo 'Sim, é um array';
            
        }else {
            echo 'Não, não é um array';
        }
        

        $array = [1 => 'a', 2 => 'b', 18 => 'c'];
        echo '<pre>';
            print_r($array);
        echo '<pre>';

        echo '<hr />';

        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
        echo '<pre>';
        */

        /*
        // função sort
        $array = array('teclado','mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
            print_r($array);
        echo '<pre>';

        sort($array); // retorno true ou false
        echo '<pre>';
            print_r($array);
        echo '<pre>';
        */

        /*
        // função asort
        $array = array('teclado','mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
            print_r($array);
        echo '<pre>';

        asort($array); // retorno true ou false
        echo '<pre>';
            print_r($array);
        echo '<pre>';

        */
        /* 
        // função count
         $array = array('teclado','mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
         echo '<pre>';
            print_r($array); 
            echo count($array);
         echo '<pre>';
        */

        /* 
        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
            print_r($novo_array); 
        echo '<pre>';
         */

          /*    
         // função explode
         $string = '22/05/2020';
         $array_retorno = explode('/', $string);
         echo '<pre>';
             echo $string;   
             print_r($array_retorno);
             echo $array_retorno[2]. '-' .$array_retorno[1]. '-' .$array_retorno[0];  
         echo '<pre>';
          */

          $array = ['a', 'b', 'x', 'y']; // a,b,x,y 
          $string_retorno = implode('-', $array);
          echo $string_retorno;



    

    ?>
        
</body>
</html>