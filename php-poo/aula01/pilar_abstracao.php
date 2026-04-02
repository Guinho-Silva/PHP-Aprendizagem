<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar de Abstração</title>
</head>
<body>
    <h1>OO - Pilar de Abstração</h1>
    <?php 
        // Modelo -> nome da classe
        class Funcionario{
            // Atributos da Classe
            public $nome = 'Iago';
            
            public $telefone = 1199999999;
            
            public $numeroFilhos = 2;

            // Métodos da Classe
            function resumirCadFunc(){
                // operador $this -> ajuste de contexto
                return "O funcionario $this->nome do $this->telefone tem $this->numeroFilhos filhos";
            }

            function modificarNumFilhos($modificaFilho){
                // afetar algum atributo

                $this->numeroFilhos = $modificaFilho;

            }

        }
        // Instancia o objeto
        $y = new Funcionario();

        // Chama o método da classe
        echo $y->resumirCadFunc();
        echo '<br />';
        
        $y->modificarNumFilhos(3);
        // imprime com a nova alteração
        echo $y->resumirCadFunc();
    ?>
</body>
</html>