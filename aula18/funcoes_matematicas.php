<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $numero = 25.3;

        // Arredonda para cima
        
        echo ceil($numero);

        // Arredonda para baixo

        echo floor($numero);

        // Arredonda com base na fração

        // .0  e .4 => baixo / .5 => cima

        echo round($numero);

        // Gera um número aleatório

        echo rand(10, 20);
        
        // Retorna a raiz quadrada de um número

        echo sqrt($numero);
    
    
    ?>
</body>
</html>