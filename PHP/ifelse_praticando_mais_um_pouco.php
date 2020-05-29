<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

        <?php

        $usuario_possui_cartao_loja = true; 
        $valor_compra = 99;

        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
            # code...
            $valor_frete = 0;
            

        }else if($usuario_possui_cartao_loja  && $valor_compra >= 300) {
            $valor_frete = 10;
            
        
        }else if($usuario_possui_cartao_loja  && $valor_compra >= 100) {
            $valor_frete = 25;
            
        }else {
            # code...
            $recebeu_desconto_frete = false;
            
        }
        ?>

        <h1>Detalhe do Pedido</h1>
        
        <p>Possui cartão da loja? 
            <?php
                // <condição> ? true : false

                $teste = $usuario_possui_cartao_loja ? 'SIM' : 'NÃO';
                echo $teste                         

                /*
                if ($usuario_possui_cartao_loja) {
                    # code...
                    echo 'SIM';
                }else {
                    echo 'NÃO';
                    
                }
                */


            ?>
        <p>

        <p>Valor da Compra: <?= $valor_compra ?></p>

        <p>Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?>
            <?php

                /*
                if ($recebeu_desconto_frete) {
                    # code...
                    echo 'SIM';
                }else {
                    echo 'NÃO';
                    
                }
                */
            ?>
        <p>
        
        <p>Valor do frete: <?= $valor_frete ?></p>
        
</body>
</html>