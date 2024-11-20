<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        
        function calcularImposto($salario){
            $imposto = 0;
            
            if($salario <= 1903.98){
                echo 'Isento';
            } else if($salario >= 1903.99 && $salario <= 2826.65){
                $imposto = ($salario * 7.5)/100;
                echo $imposto;
            } else if($salario >= 2826.66 && $salario <= 3751.05){
                $imposto = ($salario * 15)/100;
                echo $imposto;
            } else if($salario >= 3751.06 && $salario <= 4664.68){
                $imposto = ($salario * 22.5)/100;
                echo $imposto;
            } else if($salario > 4664.68){
                $imposto = ($salario * 27.5)/100;
                echo $imposto;
            }
            
            
        }

        echo calcularImposto(2826.66);
        
    ?>


</body>

</html>