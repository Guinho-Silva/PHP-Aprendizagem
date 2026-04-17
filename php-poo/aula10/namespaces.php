<?php 
    // Quando possuimos classe com o mesmo nome, podemos usar o namespace
    namespace A;

    interface CadastroInterface{
        public function salvar();
    }

    class Cliente implements CadastroInterface{
        public $nome = 'Iago';

        public function __construct()
        {   
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function salvar(){
            echo 'Salva';
        }

        public function __get($attr)
        {
            return $this->$attr;
        }
    }

    namespace B;

    interface CadastroInterface{
        public function remover();
    }


    class Cliente implements CadastroInterface{
        public $nome = 'Maria';

        public function remover(){
            echo 'Remover';
        }

        public function __get($attr)
        {
            return $this->$attr;
        }
    }

    // ----------
    $c = new Cliente();

    print_r($c);
    echo $c->nome;

    // Usando o namespace A

    $c = new \A\Cliente();

    print_r($c);

?>