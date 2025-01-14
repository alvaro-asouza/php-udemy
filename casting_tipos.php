<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    //gettype() => retorna o tipo da variável
    $valor = false;
    // $valor2 = (float) $valor; //float ou double
    // $valor2 = (string) $valor;

    // $valor2 = (int) $valor;
    // $valor2 = (string) $valor;

    // $valor2 = (boolean) $valor; //bool,boolean

    $valor2 = (int) $valor; //bool,boolean

    echo $valor .''. gettype($valor);
    echo '<br />';
    echo $valor2 .''. gettype($valor2);

    ?>


</body>

</html>