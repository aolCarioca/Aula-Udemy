<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

      $texto = 'Curso Completo de PHP';

     //string to lower
     echo $texto . '<br />'; 
     echo strtolower($texto);

     echo '<hr />';

     //string to upper
     echo $texto . '<br />'; 
     echo strtoupper($texto);

     echo '<hr />';

     //upper case ucfirst
     echo $texto . '<br />'; 
     echo ucfirst($texto);

     echo '<hr />';

     //string lenght
     echo $texto . '<br />'; 
     echo strlen($texto);

     echo '<hr />';

     //string replace (Case Sensitive)
     echo $texto . '<br />'; 
     echo str_replace('PHP', 'JavaSript', $texto);

    echo '<hr />'; 
    //string substr (Case Sensitive)
    echo $texto . '<br />'; 
    //C u r s o C o m p l e t o d e P  H  P
    //0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15 ... 20
    echo substr($texto, 0, 14) . ' ... ';

    ?>
        
</body>
</html>