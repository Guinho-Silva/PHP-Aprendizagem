<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // usamos extends para garantir a herança
        class Carro extends Veiculo{
             // Remover os atributos placa e cor para usar a herança

            // public $placa = 'ABC1234';
            // public $cor = 'Bracnco';
            public $teto_solar = true;

            function __construct($placa, $cor)
            {
                $this->placa = $placa;

                $this->cor = $cor;
            }

            // function acelerar(){
            //     echo 'Acelar';
            // }

            function abrirTetoSolar() {
                echo 'Abriar teto solar';
            }

            function aletrarPosicaoVolante(){
                echo 'Alterar posição volante';
            }
        }
    
        class Moto extends Veiculo{
            // Remover os atributos placa e cor para usar a herança
            // public $placa = 'DEF122';
            // public $cor = 'Vermelho';
            public $contraPesoGuidao = true;

            function __construct($placa, $cor)
            {
               $this->placa = $placa;

               $this->cor = $cor;
            }

            // Remover o metodo acelarar

            // function acelerar(){
            // echo 'Acelerar';
            // }

            function empinar(){
                echo 'Empinar';
            }
        }

        class Veiculo{
            public $placa = null;
            public $cor = null;

            function acelerar(){
                echo 'Acelerar';
            }

            function frear(){
                echo 'Frear';
            }

            function trocarMarcha(){
                echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
            }
        }
        
        $carro = new Carro('ABC1234', 'Preto');

        $moto = new Moto('DEF5678', 'Azul');

        $carro->trocarMarcha();

        echo '<br />';

        $moto->trocarMarcha();

        
        
    
    ?>
</body>
</html>