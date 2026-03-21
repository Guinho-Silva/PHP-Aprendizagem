<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $lista_coisas = array();

        $lista_coisas['frutas'] = array(
            1 => 'Banana',
            2 => 'Maçã',
            3 => 'Morango',
            4 => 'Uva'
        );

        $lista_coisas['pessoas'] = array(
            'p1' => 'João',
            'p2' => 'José',
            'p3' => 'Maria'
        );
    
        echo $lista_coisas['frutas'][4];

        echo $lista_coisas['pessoas']['p1'];
    
    
    ?>
</body>
</html>