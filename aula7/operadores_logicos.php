<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        // Operadores lógicos

        // AND ou && 
        // E: && ou AND -> retornará verdadeiro se todos os resultados das expressões forem verdadeiro

        // OU: || or OR -> Retorna verdadeiro se ao menos uma expressão for verdade

        //XOR : XOR -> retorna verdadeiro se uma das condições for verdade

        // != -> inverte o resultado da condição retornando o oposto dela

        $num = 5;

        if($num == 3 && 10 > $num){

            echo 'verdade';
        }
        else{
            echo 'falso';
        }
    ?>
</body>
</html>