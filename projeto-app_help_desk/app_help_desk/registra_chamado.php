<?php 

    session_start();

    echo '<pre>';

    print_r($_POST);

    echo '</pre>';

    // Lembre-se

    // Atribue names aos input de caixa de valor

    $_arquivo = fopen('arquivo.txt','a');


    $titulo = str_replace('#', '-', $_POST['titulo']);

    $categoria = str_replace('#', '-', $_POST['categoria']);

    $descricao = str_replace('#', '-', $_POST['descricao']);

    //Tentar usar o implode('#', $_POST)

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao;

    // PHP_EOL -> concatenar com o texto
    
    fwrite($_arquivo, $texto);

    fclose($_arquivo);

    header('Location: abrir_chamado.php');

    echo $texto;


?>