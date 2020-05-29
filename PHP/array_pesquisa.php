<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        //in_array -> retorno true ou false para existência do que está sendo procurado  
        //array_search -> retorna o índice do valor pesquisado, caso ele exista 

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        /* 
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

      
       //$existe = in_array('Morango', $lista_frutas);
       //se o retorno for true -> texto = 1
       // caso seja false -> texto = vazio
       $existe = array_search('Maçã', $lista_frutas);
       //retorno da pesquisa não encontrado = null (neste caso null não é falso e vazio)  
       
       if ($existe != null) {
           echo 'Sim, o valor pesquisado foi entrado no array';
       } else {
           echo 'Não, o valor pesquisado não foi entrado no array';
       }
       */

       $lista_coisas = [
           'frutas' => $lista_frutas,
           'pessoas' => ['João', 'Maria']
       ];

       echo '<pre>';
        print_r($lista_coisas);
       echo '</pre>';

       $existe = in_array('Uva', $lista_coisas['frutas']);

    if ($existe) {
        echo 'Sim, o valor pesquisado foi entrado no array';
    } else {
        echo 'Não, o valor pesquisado não foi entrado no array';
    }

       

  
    ?>
        
</body>
</html>