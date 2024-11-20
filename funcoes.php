<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        //void (sem retorno)
        function exibirBoasVindas(){
            echo 'Bem-vindo ao curso de PHP <br/>';
        }
        exibirBoasVindas();

        //return (com retorno)
        function calcularAreaTerreno($largura, $cumprimento){
            $area = $largura * $cumprimento;
            return $area;
        }
        $resultado = calcularAreaTerreno(30,50);
        echo $resultado;
        

    ?>


</body>

</html>