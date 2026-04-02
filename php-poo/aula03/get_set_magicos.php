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
            public $nome = null;
            
            public $telefone = null;
            
            public $numeroFilhos = null;

            public $cargo = null;

            public $salario = null;

            // Método setter (overloading)-> recebe um determinado valor

            function __set($atributo, $valor){
                $this->$atributo = $valor;

            }
            
            function __get($atributo){
                return $this->$atributo;
            }

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

        $y->__set('nome', 'Iago');
        $y->__set('telefone', 1194842394);
        $y->__set(1);

        // Chama o método da classe
        echo $y->resumirCadFunc();
        echo '<br />';
        
        //Teste 2

        $x = new Funcionario;
        $x->setNome('Maria');
        $x->setTelefone(184384847);
        $x->setNumeroFilhos(3);

        // Chamada do método
        $x-> resumirCadFunc()
    ?>
</body>
</html>