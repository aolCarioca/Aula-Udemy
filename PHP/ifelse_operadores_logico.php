<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

        <?php

        //Operadores condicionais/comparação
        //==
        //====
        //!= ou <>
        //!==
        //<
        //>
        //<=
        //>=

        //Operadores lógico

        /*

        //E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiro
        //v e v = verdadeiro

        if (4 == 4 && 10 > 15) {
            # code...
            echo 'Verdadeiro';
        } else {

            echo 'Falso';
        }
        */

        /*

        //OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados das expresões forem verdadeiro
        //v ou f = verdadeiro

        if (4 == 4 || 10 > 15) {
            # code...
            echo 'Verdadeiro';
        } else {

            echo 'Falso';
        }
        
        */

        /*

        //XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa
        //v xor v = !(f) = v

        if (7 >= 4 XOR 10 < 15) {
            # code...
            echo 'Verdadeiro';
        }else {
            echo 'Falso';
        }
        
        */

        /*
        //! -> inverte o resultado retornado pela expressão  
        //f = !(f) = v

        if (!('a' == 'a')) {
            # code...
            echo 'Verdadeiro';
        }else {
            echo 'Falso';
        }

        */

        /*

        // v e v e f = falso 
        if (22 == 22 && 3 == 3 && 5 != 5) {
            # code...
            echo 'Verdadeiro';
        }else {
            echo 'Falso';
        }

        */

        //() -> estabelecer ordem de precedencia

        // (v e v) = v ou f  
        if ((22 == 22 && 3 == 3) || 5 != 5) {
           # code...
           echo 'Verdadeiro';
        }else {
            echo 'Falso';
        }


      

        ?>
</body>
</html>