<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $lista_coisas = [];
    $lista_coisas['frutas'] = [
        1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'
    ];
    $lista_coisas['pessoas'] = [
        1 => 'Maria', 2 => 'João', 3 => 'Pedro'
    ];

    /*
    echo '<pre>';
    var_dump($lista_coisas);
    echo '</pre>';
    echo '<hr/>';
    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    */
    echo $lista_coisas['frutas'][3];

    ?>


</body>

</html>