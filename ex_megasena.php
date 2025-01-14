<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    
    $numeros = array();

    while(count($numeros) < 6){
        $sorteio = rand(1, 60);

        if(!in_array($sorteio, $numeros)){
            $numeros[] = $sorteio;        
        }
    }

    echo '<pre>';
    print_r($numeros);
    echo '</pre>'; 

    
    ?>


</body>

</html>