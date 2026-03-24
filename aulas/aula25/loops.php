<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = 1;
        // operadores comparação / lógico

        echo '--Inicio do loop--';
        while(true){
            // loop infinito, pois sempre será true

            $num += $num; //irá rodar enquanto num for menor que 10
            
            # Testando o Continue
            if ($num == 2 OR $num == 6){
                continue; // Pula uma iteração
            }

            echo '$num <br />';

            # Testando o Break
            /*if($num > 100){
                break;
            }
            */

        

             //interrompe a execução do laço
        }
        echo '--fim do loop--';
    
    ?>
</body>
</html>