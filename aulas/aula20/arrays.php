<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        //arrays sequenciais (númericos)

        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
        
        # Atribuindo um novo indicie

        $lista_frutas[] = 'Abacaxi';

        # Usando fuções de debug
        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        echo '<hr />';

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        # Imprimindo 

        echo  $lista_frutas[1];

        // Arrays associativos

        $lista_frutas = array(
            1 =>'Banana',
            2 =>'Maçã', 
            3 => 'Morango',
            4 => 'Uva');

    ?>
</body>
</html>