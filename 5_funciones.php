<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1>Funciones</h1>
<?php

//Funciones variables
//Esto significa que si un nombre de variable tiene paréntesis anexos a él, 
//PHP buscará una función con el mismo nombre que lo evaluado por la variable,
// e intentará ejecutarla. Las funciones variables no funcionarán con constructores de lenguaje
// como echo, print, unset(),isset(), empty(), include, require y similares. 
echo "<h1>if</h1>";
//Ejemplo 1
<?php
function foo() 
{
    echo "En foo()<br />\n";
}

function bar($arg = '')
{
    echo "En bar(); el argumento era '$arg'.<br />\n";
}

// Esta es una función de envoltura alrededor de echo
function hacerecho($cadena)
{
    echo $cadena;
}

$func = 'foo';
$func();        // Esto llama a foo()

$func = 'bar';
$func('prueba');  // Esto llama a bar()

$func = 'hacerecho';
$func('prueba');  // Esto llama a hacerecho()


?>