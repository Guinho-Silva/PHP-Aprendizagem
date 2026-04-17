<?php

    // try -> tente
    // catch -> pegar
    // finally -> finalmente
    // throw -> lançar 'erro'

    try{
        echo '<h3> *** Try *** </h3>';

        //$sql = 'Select * from clientes';
        //mysqli_query($sql); //Erro

        if(!file_exists('require_arquivo_a.php')){
            throw new Exception('O arquivo em questão não esta disponivel');
        }

    }catch(Error $e){
        echo '<h3> *** Catch Error *** </h3>'; //captura o erro
        echo '<p style="color: red">' . $e . '</p>'; //armazendando o erro dentro do banco de dados

    } catch(Exception $e){
        echo '<h3> *** Catch Exception*** </h3>'; //captura o erro
        echo '<p style="color: red">' . $e . '</p>';
    }
    
    
    //finally{
    //     echo '<h3> *** Finnally *** </h3>';
    // } opcional

?>