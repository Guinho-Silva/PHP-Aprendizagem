<?php 

    session_start(); // usar sempre antes de dados vindo do navegador

    $_SESSION['Autenticado'];

    // print_r($_SESSION); -> é um array

    // variavel que verifica se a autenticação foi realizada

    $usuario_autenticacdo = false;


    // usuarios do sistema - Teste SEM banco

    $usuario_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd')
    );


    foreach($usuario_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticacdo = true; //variavel de controle
        }
    }
        
    if($usuario_autenticacdo){
        echo 'Usuário autenticado com sucesso!';
        $_SESSION['Autenticado'] = 'SIM';
        header('location: home.php');
    }
    else{
        # header('location: index.php') //funciona como se fosse um desvio caso não atenda um requisito
        header('location: index.php?login=erro');
        
        $_SESSION['Autenticado'] = 'NÂO';
    }
        
        


    // --USANDO O GET--

    /*$_GET['email']; // O get pega os "name" definidos no html
    $_GET['senha']; // O método get expoem o paramentros passados para URL
    */

    // --USANDO O POST--

    $_POST['email'];

    $_POST['senha'];
    // O método post anexa os dados feitos por um formulario na própria requisção

    // Para atribuir o método post é so por no form `method= $_POST` 


?>