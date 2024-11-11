<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

   <?php

   $nome = 'Maria';
   $cor = 'Azul';
   $idade = 30;
   $atividade_preferida = 'andar de bicicleta';

   //operador .

    echo 'Olá ' . $nome .', vi que sua cor favorita é ' . $cor .', estou vendo também que você possui ' . $idade .' anos e que gosta de ' . $atividade_preferida .'';

    //aspas duplas
    echo '<hr>';
    echo '<br />';

    echo "Olá $nome, vi que sua cor favorita é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida";

   ?>
    
</body>
</html>