<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        function CalcularImposto($salario){

            switch (true){
                case ($salario <= 1903.98):

                    return 'Isento';

                case ($salario <= 2826.65):

                    return '7,5%';
                case($salario <= 3751.05):

                    return '15%';
                
                case($salario <= 4664.68):

                    return '22,5%';
                
                default:
                    
                    return  '27,5%';
            }
        }
    
    
        // chamada da funcao
        
        $salario_user = CalcularImposto(1500);

        // exibir na tela

        echo $salario_user
    ?>
</body>
</html>