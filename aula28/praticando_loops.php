<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $registros = array(
        array('titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'),
        array('titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo noticia 2'),
        array('titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo noticia 3'));

    echo '<pre>';
    print_r($registros);
    echo '</pre>';

    $index = 0;

    // usando o count pois caso haja uma alteração no array o loop continue

    /*while($index < count($registros)){

        echo '<h3>'. $registros[$index]['titulo'] . '</h3>';
        echo '<p>' . $registros[$index]['conteudo'] . '</p>';
        echo '<hr />';

        $index++;
    }*/

        // Usando o DO WHILE
    /*do{
        echo '<h3>' . $registros[$index]['titulo'] . '</h3>';

        echo '<p>' . $registros[$index]['conteudo'] . '</p>';

        $index++;

    }while($index < count($registros))*/
    
    for($index = 0; $index < count($registros); $index++){
        echo '<h3>' . $registros[$index]['titulo'] . '</h3>';

        echo '<p>' . $registros[$index]['conteudo'] . '</p>';
    }
    
    ?>
</body>
</html>