<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        class Carro{
            public $placa = 'ABC1234';
            public $cor = 'Bracnco';
            public $teto_solar = true;

            function acelerar(){
                echo 'Acelar';
            }

            function abrirTetoSolar() {
                echo 'Abriar teto solar';
            }

            function aletrarPosicaoVolante(){
                echo 'Alterar posição volante';
            }
        }
    
        class moto{
            public $placa = 'DEF122';
            public $cor = 'Vermelho';
            public $contraPesoGuidao = true;

            function acelerar(){
            echo 'Acelerar';
            }

            function empinar(){
                echo 'Empinar';
            }
        }

        class Veiculi{
            public $placa = null;
            public $cor = null;

            function acelerar(){
                echo 'Aceler'
            }
        }
        $carro = new Carro();

        $moto = new Moto();
        
        echo '<pre>';
        print_r($carro);
        echo '</pre>';

        echo '<pre>';
        print_r($moto);
        echo '</pre>';
        // $carro-> acelerar();


    
    ?>
</body>
</html>