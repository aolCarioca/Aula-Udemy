<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        $num = 1;
        //operadores configuração / lógicos
        echo '-- Início do Loop --<br />';
        while ($num < 10) {

            $num++; //critério de parada

            if ($num == 2 || $num == 6) {
                continue;
            }

            echo "$num <br />";

            /*
            if ($num > 100) {
                break;
            }
            */
           
        }
        echo '-- Fim do Loop --';    

    ?>
        
</body>
</html>