<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Null = Null
         False = False and vazio
         Empty = vazio 
    -->
    <?php 
        //  false (true/false) - variável boolean

        // null e empty - valores especiais

        $funcionario1 = null;

        $funcionario2 = '';


        // valores null
        if(is_null($funcionario1)){
            echo 'Sim, a variável é null';
        }
        else{
            echo 'Não, a varia´vel não é nul';
        }
        echo '<br />';
        // valores vazios?

        if(empty($funcionario1)){
            echo 'Sim, a variável esta vazia';
        }
        else{
            echo 'Não, a variavel não esta vazia';
        }
        echo '<br />';

        if(is_null($funcionario2)){
            echo 'Sim, a variável é null';
        }
        else{
            echo 'Não, a varia´vel não é nul';
        }


    ?>
</body>
</html>