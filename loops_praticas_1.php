<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $registros = array(
        array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo' => 'Título noticia 2', 'conteudo' => 'Conteúdo noticia 2'),
        array('titulo' => 'Título noticia 3', 'conteudo' => 'Conteúdo noticia 3'),
        array('titulo' => 'Título noticia 4', 'conteudo' => 'Conteúdo noticia 4')
    );

    echo '<pre>';
    print_r($registros);
    echo '</pre>';
    echo '<br/> <br/> <br/>';
    $idx = 0;

    //count - Retorna o número de elementos de um array

    echo 'O array possui ' . count($registros) . ' registros <br/><br/>';

    /*
    while($idx < count($registros)){
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3> - ';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p> - ';

        echo '<hr/>';
        $idx++;
    }
     
    
     do {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3> - ';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p> - ';

        echo '<hr/>';
        $idx++;
    } while ($idx < count($registros));

    */

    for ($idx = 0; $idx < count($registros); $idx++) {
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3> - ';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p> - ';

        echo '<hr/>';
    }
    ?>


</body>

</html>