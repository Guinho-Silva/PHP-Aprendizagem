<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        // string to lowe
        echo '<h1>Usando o strtolower</h1>';

        $texto = 'Curso completo de PHP';

        echo $texto . '<br />' ;

        echo strtolower($texto) . '<br />';

        echo '<hr />';
        // String to Upper

        echo $texto . '<br />';

        echo strtoupper($texto);
        
        echo '<hr />';

        // Ucfirst

        echo '<h3>Usando o ucfirst</h3>';

         echo $texto . '<br />';

        echo ucfirst($texto);

        echo '<hr />';

        // string lenght
        echo '<h3>Usando o strlen </h3>';

        echo $texto . '<br />';

        echo strlen($texto);

        echo '<hr />';

        // str_replace
        echo '<h3>Usando o str_replace </h3>';

        echo $texto . '<br />';

        echo str_replace('PHP', 'Python', $texto);

        echo '<hr />';

        // substr
        echo '<h3>Usando o substr </h3>';

        echo $texto . '<br />';

        echo substr($texto, 1, 34);
    ?>
</body>
</html>