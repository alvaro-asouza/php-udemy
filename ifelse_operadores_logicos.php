<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

   <?php

    //operadores condicionais/comparação
   //==
   //===
   //!= ou <>
   //!== não identico
   // <
   // >
   //<=
   //>=

   //operadores lógicos
   //E: && ou AND -> retorna verdadeiro se todos os resultados forem verdadeiros
   //OU: || ou OR -> retorna verdadeiro se uma das expressões for verdadeiro
   //XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa
   //! -> inverte o resultado esperado pela expressão 

   //f e v = f
   //v e v = v
   //f e f = f
   //f xor v = v
   //f = !(f) = v
   if(!('a' == 'b')){
    echo 'Verdadeiro';
   }else{
    echo 'Falso';
   }

   ?>
    
</body>
</html>