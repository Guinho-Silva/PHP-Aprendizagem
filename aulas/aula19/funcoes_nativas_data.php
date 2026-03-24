<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        // recuperação da data atual

        echo date('d/m/Y', 'H:i');

        date_default_timezone_get();

        date_default_timezone_set('America/Sao_Paulo');


        $data_inicial = '2018-04-24';

        $data_final = '2018-05-15';

        // timestamp

        $time_inicial = $strtotime($data_inicial);

        $time_final = strtotime($data_final);


        echo $data_inicial . '-' . $time_inicial;

        echo '<br / >';

        echo $data_final . '-' . $time_final;

        $diferenca_times = $time_final - $time_inicial;

        echo '<br />';

        echo 'A diferença de segundos entre a data inicial e final é de: ' . $diferenca_times;

        $segundos_existem_dia = 24 * 60 * 60;

        $diferenca_de_dias = $diferenca_times / $segundos_existem_dia;

        echo '<br />';

        echo 'A diferença em dias é de: ' . $diferenca_de_dias;

    ?>
</body>
</html>