<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // -----------Interfaces------------
        
        // Semelhante a herança
        interface EquipamentoEletronicoInterface {
            // Não usamos o método abre e fecha chaves para definir escopo

            public function ligar();

            public function desligar();

            // Todos os métodos da interface devem ser PUBLICOS
        }

        // --------classes----------

        // Para usar a interface nos métodos da classe, usamos o method implements
        class Geladeira implements EquipamentoEletronicoInterface {

            public function ligar(){
                echo 'Geladeira ligada';
            }

            public function desligar()
            {
                echo 'Geladeira desligada';
            }

            public function abrirPorta(){
                echo 'Abrir porta';
            
            } 

        }

        class TV implements EquipamentoEletronicoInterface{

             public function ligar(){
                echo 'TV ligada';
            }

            public function desligar()
            {
                echo 'TV desligada';
            }

            public function trocarCanal(){
                echo 'Trocar canal';
            }
        }

    //--------Instancias/testes-----------
   
    $x = new Geladeira;
    $y = new TV;

    echo '<pre>';
    print_r(get_class_methods($x));
    echo '</pre>';

    echo '<br />';
    echo '<pre>';
    print_r(get_class_methods($y));
    echo '</pre>';

    ?>
</body>
</html>