<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        /*for(variavel; condicao; incremento){

        }*/

        // podemos omitir a condição e fazer com que ela seja quebrada dentro do break
        for($x = 1; true; $x += 1){

            if($x >= 20){
                break;
            }
            echo '$x <br />';
        }


    
    
    ?>
</body>
</html>