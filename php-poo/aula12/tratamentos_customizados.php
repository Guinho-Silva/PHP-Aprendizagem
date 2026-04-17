<?php

    class MinhaExceptionCustomizada extends Exception{
        private $erro = '';

        public function __construct($erro)
        {
            $this->erro = $erro;
        }

        public function exibirMensagemErro(){
           return $this->erro; 
        }
    }



    try{
        throw new MinhaExceptionCustomizada("Esse é um erro testes");
    }catch(MinhaExceptionCustomizada $e){
        echo $e->exibirMensagemErro();
    }


?>