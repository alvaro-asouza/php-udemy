<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $texto = 'Curso completo de PHP';

        //string to lower
        echo $texto. '<br/>';
        echo strtolower($texto). '<br />';

        echo '<hr>';
        //string to upper
        echo $texto. '<br/>';
        echo strtoupper($texto). '<br />';

        echo '<hr>';
        //upper case first
        echo $texto. '<br/>';
        echo ucfirst($texto). '<br />';

        echo '<hr>';
        //string lenght
        echo $texto. '<br/>';
        echo strlen($texto). '<br />';

        echo '<hr>';
        //string str_replace
        echo $texto. '<br/>';
        echo str_replace('completo', 'complemento', $texto). '<br />';

        echo '<hr>';
        //string substr
        echo $texto. '<br/>';
        echo substr($texto, 0, 14). '...';

        
    ?>


</body>

</html>