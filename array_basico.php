<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    //sequenciais (númericos)
    //$lista_frutas = array('Banana', 'Mação', 'Morango', 'Uva', 'Abacate');
    /*
    $lista_frutas = ['Banana', 'Mação', 'Morango', 'Uva', 'Abacate'];

    $lista_frutas[] = 'Abacaxi';

    
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<hr/>';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    

    echo $lista_frutas[2];
    */

    //associativo
    $lista_frutas = array(
        'a' => 'Banana',
        'b' => 'Mação',
        'x' => 'Morango',
        'z' =>  'Uva',
        '2' =>   'Abacate'
    );
    
    $lista_frutas['w'] = 'Abacaxi';
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';

    
    echo $lista_frutas['w'];

    ?>


</body>

</html>