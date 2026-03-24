<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // void (sem retorno)

        function ExibirMensagem(){
            echo 'Seja bem vindo ao curo de PHP!';
        }

        // return (com retorno)

        function CalcularAreaTerreno($largura, $comprimento){

            $total_area = $largura * $comprimento;

            return $total_area;
        }

        $resultado = CalcularAreaTerreno(30, 50);

        echo $resultado;
    ?>

</body>
</html>