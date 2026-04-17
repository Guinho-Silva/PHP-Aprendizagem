<?php 

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

?>