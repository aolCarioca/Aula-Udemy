<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

       $funcionarios = array(
           array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => '06/03/1970'),
           array('nome' => 'Maria', 'salario' => 3000, 'data_nascimento' => '03/06/1970'),
           array('nome' => 'Júlia', 'salario' => 2200, 'data_nascimento' => '06/12/1975')
       );   

       echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

       
       foreach($funcionarios as $idx => $funcionario){
           
            foreach($funcionario as $idx2 => $valor){
                echo "$idx2 - $valor <br />";
            }
            echo '<hr />';
       }
       

    ?>
        
</body>
</html>