<?php 
    require './php-poo/bibliotecas/lib1/lib1.php';

    require './php-poo/bibliotecas/lib2/lib2.php';

    // Usamos o use para chamar o conteudo/classe dentro de outro arquivo

    use B\Cliente as C1;
    use A\Cliente as C2; //Sem usar o alias, naturalmente haverá conflito

    $c = new C1();

    print_r($c);

    echo $c->__get('nome')

    // ->retornara o nome 'Maria'

?> 