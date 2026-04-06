<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        // Método Construtor e Destrutor

        // __construct()
        // __destruct()
    
        class Pessoa{
            
            public $nome = null;

            function __construct(){
                echo 'Objeto iniciado';
            }
        }

        $pessoa = new Pessoa();


    
    ?>
</body>
</html>