<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $funcionarios = array(
            array('Nome'=> 'João', 'Salario' => 2500, 'data_nascimento' => '05/07/2004'), 
            array('Nome'=> 'Maria', 'Salario' => 3500), 
            array('Nome'=> 'Julia', 'Salario' => 4500));

            foreach($funcionarios as $index => $funcionario){

                foreach($funcionario as $index2 => $valor){
                    echo '$index2 - $valor <br />';
                }
                echo '<hr />';
            }

        /*foreach($funcionarios as $index => $nome_funcionario){

            echo "ID: $index - NOME: $nome_funcionario '<br />";
        }*/
    
    ?>
</body>
</h