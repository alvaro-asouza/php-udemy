<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    
    /*
    $array = array('notebook', 'teclado');
    $retorno = is_array($array);

    if($retorno){
        echo 'Sim, é um array';
    }else {
        echo 'Não, não é um array';
    }
    

    $array = [1 => 'a', 7 => 'b', 18 => 'c'];
    echo '<pre>';
        print_r($array);
    echo '</pre>'; 
    
    $chaves_array = array_keys($array);
    echo '<pre>';
        print_r($chaves_array);
    echo '</pre>'; 
    

    $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook' );
    echo '<pre>';
        print_r($array);
    echo '</pre>'; 

    sort($array); //true ou false
    echo '<pre>';
        print_r($array);
    echo '</pre>'; 
    */

    /*
    $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook' );
    echo '<pre>';
        print_r($array);
    echo '</pre>'; 

    asort($array); //true ou false
    echo '<pre>';
        print_r($array);
    echo '</pre>'; 
    */

    /*
    $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook' );
    echo '<pre>';
        print_r($array);
        echo count($array);
    echo '</pre>'; 
    */

    /*
    $array1 = ['osx', 'windows'];
    $array2 = array('linux');
    $array3 = ['solaris'];

    $novo_array = array_merge($array1, $array2, $array3);
    echo '<pre>';
        print_r($novo_array);
    echo '</pre>';
    */

    /*
    $string = '26/04/2024';
    $array_retorno = explode('/', $string);
    echo '<pre>';
        echo $string;
        print_r($array_retorno);
        echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
    echo '</pre>';
    */

    $array = ['a', 'b', 'x', 'y']; //a,b,x,y
    $string_retorno = implode(',', $array);
    echo $string_retorno;

    ?>


</body>

</html>