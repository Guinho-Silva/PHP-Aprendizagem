<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        class exemplo{
            public static $atributo1 = 'Atributo estatico';

            public $atributo2 = 'Atributo normal';

            public static function metodo1() {
                echo 'Método estático';
            }

            public function metodo2() {
                echo 'Método normal';
            }
        }
    
        // instancia

        //$x = new exemplo();

        // Quando usamos atributos e métodos estáticos, não precisamos instancia-los

        echo exemplo::$atributo1;


    ?>    
</body>
</html>