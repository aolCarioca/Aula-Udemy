<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
</head>
<body>

    <?php

        /*
       //recuperação data atual  / data corrente

       echo date('d/m/Y H:i');

       //
       echo '<br />';
       echo date_default_timezone_get();
       date_default_timezone_set('America/Sao_Paulo');
       echo '<br />';
       echo date('d/m/Y H:i');
       */
      
       $data_inicial = '2020-05-21';
       $data_final = '2020-06-21';

       //timestamp
       //01/01/1970 -- 2020-05-21

       $time_inicial = strtotime($data_inicial);
       $time_final = strtotime($data_final);

       echo $data_inicial . ' - ' . $time_inicial;
       echo '<br />';
       echo $data_final . ' - ' . $time_final;

       $diferenca_times = abs($time_inicial - $time_final);

       echo '<br />';

       echo 'A diferença de segundos entre a data inicial e final é '. $diferenca_times;

       $segundos_existem_dia = 24 * 60 * 60;
       
       echo '<br />';

       echo 'Um dia possui '. $segundos_existem_dia . ' segundos'; 

       $diferença_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

       echo '<br />';

       echo 'A diferenças em dias é ' . $diferença_de_dias_entre_as_datas;

  
    ?>
        
</body>
</html>