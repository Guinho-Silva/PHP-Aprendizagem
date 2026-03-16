<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // a cada case, ele verifica se há uma igualdade, a cada case ele fará case 1 == $parametro

        $parametro = 2;

        switch($parametro){
            case 1:
                echo 'entrou no case 1';
                break;
            
            case 2:
                echo 'entrou no case 2';
                break;
            
            case 3:
                echo 'entrou no case 3';
                break;
        
            default:
                echo 'entrou no default';
                break;


        }
               
    
    
    
    ?>
</body>
</html>