<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <h3>Pós-incremento</h3>

    <?php

      $a = 7;

      echo "O valor contido em a é $a <br />";

      echo 'O valor contido em a após o incremento é ' .  $a++ . ' <br />';

      echo "O valor atualizado é $a ";

    ?>

    <h3>Pré-incremento</h3>

    <?php

      $a = 7;

      echo "O valor contido em a é $a <br />";

      echo 'O valor contido em a pré incremento é ' .  ++$a . ' <br />';

      echo "O valor atualizado é $a ";
      
    ?>

    <h3>Pós-decremento</h3>

    <?php

      $a = 7;

      echo "O valor contido em a é $a <br />";

      echo 'O valor contido em a pós decremento é ' .  $a-- . ' <br />';

      echo "O valor atualizado é $a ";

    ?>
    
    <h3>Pré-decremento</h3>
    
    <?php

      $a = 7;

      echo "O valor contido em a é $a <br />";

      echo 'O valor contido em a pré decremento é ' .  --$a . ' <br />';

      echo "O valor atualizado é $a ";

    ?>
        
</body>
</html>