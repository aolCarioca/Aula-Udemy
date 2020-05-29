<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

    $parametro = true;

    switch ($parametro) {
        case 1:
            echo 'Entrou no case 1';
            break;

            case 'abc':
                echo 'Entrou no case 2';
                break;

            case true:
                echo 'Entrou no case 1';
            break;      
        
        default:
                echo 'Entrou no default';
            break;
    }

    ?>
        
</body>
</html>