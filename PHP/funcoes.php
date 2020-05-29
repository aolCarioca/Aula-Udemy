<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

      //função do tipo void "Função sem retorno"

      function exibirBoasVindas() {
        echo "Bem-vindo ao curso de PHP! <br />";
      }

      exibirBoasVindas();

      //função com retorno

      function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura * $comprimento;
        
        return $area;
      }

     $resultado = calcularAreaTerreno(5, 25);
     echo $resultado; 
       
    ?>
        
</body>
</html>