<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <?php 
        // string

        $nome = 'Iago Silva';

        // int
    
        $idade = 20;

        // float

        $peso = 75.50;

        // boolean

        $fumante_sn = false;

        // ..lógica... //

        // Alterando valores

        $idade = 21

    ?>

    <h1>Ficha cadastral</h1>
    <br>
    
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>