<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // is_array

        /*$array = 'String';
        $retorno = is_array($array);


        if($retorno){
            echo 'É um array';
        }
        else{
            echo 'Não é um array';
        }*/

        // array_keys

        /*$array = array(
            1 => 'Iago',
            2 => 'Maria',
            3 => 'Adão'
        );

        $retorno = array_keys($array);

        echo $retorno

        */

        // SORT(ARRAY)


        /* $array = ['notebook', 'teclado', 'mouse', 'mousepad', 'gabinete', 'cabo hdmi'] ;

        $retorno = sort($array); // não preserva os indicies e ordem alfabeticamente

        echo $retorno */

        // ASORT(ARRAY)


        /*$array = ['notebook', 'teclado', 'mouse', 'mousepad', 'gabinete', 'cabo hdmi'] ;

        $retorno = asort($array); // preserva os indicies e ordem alfabeticamente

        echo $retorno
        */


        /*// COUNT(ARRAY)
        $array = ['notebook', 'teclado', 'mouse', 'mousepad', 'gabinete', 'cabo hdmi'] ;

        $retorno = count($array); // irá retornar a quantidade de elementos presente dentro do array

        echo $retorno*/

        // Array_merge

        /*$array = ['notebook', 'teclado', 'mouse', 'mousepad', 'gabinete', 'cabo hdmi'] ;

        $array1 = ['osx', 'windows'];

        $array2 = ['linux'];

        $array3 = ['solaris'];

        $retorno_novo_array = array_merge($array1, $array2, $array3); // preserva os indicies e ordem alfabeticamente

        echo $retorno_novo_array*/
        

        /*$string = '26/04/2026';

        $array_de_retorno = explode('/', $string);


        echo $string;
        print_r($array_de_retorno);

        // explode quebra os caracteres e coloca cada elemento em indiice
        */

        $string = ['a', 'b', 'x', 'y'];

        $retorno_array_string = implode('-', $string);

        echo $retorno_array_string
    ?>
</body>
</html>