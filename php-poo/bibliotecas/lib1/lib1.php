<?php

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
?>