<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Foreach equivale ao 
     
        for in range() -> no python
    -->
    <?php 

        $itens = array('Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira');
        
        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $item){
            echo '$item';

            if($item == 'Mesa'){
                echo '(*Compre uma mesa e ganhe 25% de desconto na proxima compra)';
            }

            echo '<hr />';
        }
    
    
    ?>
</body>
</html>