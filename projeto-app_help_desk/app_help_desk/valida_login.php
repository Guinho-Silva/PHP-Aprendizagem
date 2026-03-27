<?php 

    session_start(); // usar sempre antes de dados vindo do navegador

    $_SESSION['Autenticado'];

    // print_r($_SESSION); -> é um array

    // variavel que verifica se a autenticação foi realizada

    $usuario_autenticacdo = false;

    $usuario_id = null;
    
    $perfis = array(
        1 => 'Administrativo',
        2 => 'Usuário'
    );

    $usuario_perfil_id = null;

    // usuarios do sistema - Teste SEM banco

    $usuario_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1 ),

        array('id' => 2,'email' => 'user@teste.com.br', 'senha' => '1234','perfil_id' => 1 ),

        array('id' => 3,'email' => 'joao@teste.com.br', 'senha' => '1234','perfil_id' => 2),

        array('id' => 4,'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2)
    );


    foreach($usuario_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticacdo = true; //variavel de controle
            $usuario_id = $user['id'];

            $usuario_perfil_id = $user['perfil_id'];
        }
    }
        
    if($usuario_autenticacdo){
        echo 'Usuário autenticado com sucesso!';
        $_SESSION['Autenticado'] = 'SIM';

        $_SESSION['id'] = $usuario_id;

        $_SESSION['perfil_id']= $usuario_perfil_id;

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