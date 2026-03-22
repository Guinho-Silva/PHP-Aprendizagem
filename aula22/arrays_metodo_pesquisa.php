<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // funções nativas para lidar com pesquisa em array

        // in_array() -> retorna true ou false paa oq está sendo procurado

        // array_search() -> retorna o indicie do valor procurado

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        $existe1 = in_array('Maçã',$lista_frutas);

        // true -> texto = 1

        // false -> texto = vazio

        $existe2 = array_search('Uva', $lista_frutas);

        // null -> se não houver um valor, seu retorno é nulo

        
        if($existe2 != null){
            echo 'O valor pesquisado existe no array';
        }
        else{
            echo 'O valor pesquisado não existe no array';
        }


        /*if($existe1){
            echo 'O valor pesquisado existe no array';
        }
        else{
            echo 'O valor pesquisado não existe no array';
        }
        */
    ?>
</body>
</html>