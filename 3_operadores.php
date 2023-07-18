<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>
<h1>Operadores</h1>
    <!--script php-->
    <?php 
    operadores aritmeticos
    /*1.Sirven para hacer cálculos matemáticos con valores numéricos*/ 
    <?php

echo (5 % 3)."\n";           // muestra 2
echo (5 % -3)."\n";          // muestra 2
echo (-5 % 3)."\n";          // muestra -2
echo (-5 % -3)."\n";         // muestra -2

?>

    Operadores de concatenación:
    /*2.Sirven para combinar varias cadenas dentro de una sola*/  
    <?php
    $a = "Hello ";
    $b = $a . "World!"; // ahora $b contiene "Hello World!"
    
    $a = "Hello ";
    $a .= "World!";     // ahora $a contiene "Hello World!"
    ?>
</body>
</html>