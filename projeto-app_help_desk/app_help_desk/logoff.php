<?php
    session_start();
    session_destroy();

    header('Location: index.php'); // -> redireciona apos o destroy
/*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    // remover índicies de array de sessão

    // unset() -> os indicies associado a ao arrays
    unset($_SESSION['x']); // -> remove apenas se existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    // destruir a variável de sessão

    // session_destroy() -> remove todos os indicies contidos na super global session

    session_destroy(); // -> será destruida

    // forçar um redirecionamento -> para uma nova requisição http
    
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
*/
?>