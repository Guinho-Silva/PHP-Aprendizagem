<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        /* -------- INTERFACES ---------- */

        // interface Mamifero
        interface mamiferoInterface{
            public function respirar();
        }

        // Interface Terrestre
        interface terrestreInterface extends mamiferoInterface{
            public function andar();
        }

        // Interface Aquatico
        interface aquaticoInterface{
            public function nadar();
        }
    
    
        /* -------- CLASSES ---------- */

        class Humano implements terrestreInterface, aquaticoInterface{
            public function andar(){
                echo 'Humano anda';
            }

            public function respirar()
            {
                echo 'Humano respira';
            }

            public function nadar()
            {
                echo 'Humano nada';
            }

            public function converdar(){
                echo 'Conversar';
            }
        }

        // CLASS BALEIA

        class Baleia implements mamiferoInterface, aquaticoInterface{
            
            public function respirar()
            {
                echo 'Baleia respira';
            }

            public function nadar()
            {
                echo 'Baleia nada';
            }

            public function esguichar(){
                echo 'Escguichar';
            }
        }

        $x = new Humano;
        print_r(get_class_methods($x))
    ?>
</body>
</html>