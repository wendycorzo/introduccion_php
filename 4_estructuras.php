<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estructuras de control</title>
</head>
<body>
    <h1>estructuras de control</h1>
<?php

//if, if-else
echo "<br>"
echo "<h1>if</h1>";
//Ejemplo 1
$color = "rojo";
if($color = "rojo")
{
    print("Efectivamente, el color es rojo");
}
//Ejemplo 2
$x = 10;
$y = 15;
if($x == sy)
{
    print("x e y son iguales");
}
elseif($x > $y)
{
    print("x es mayor que y");
}
elseif($x <) $y)
{
    print("x es menor que y");
}
echo "<br>"
echo "<h1>if</h1>";
//while
// indica que mientras no se cumpla una determinada condición, no se saldrá del bucle y no
//satará a la siguiente linea de código
$x = 10;
while(--$x)
{
    echo "<big>";
    echo "<b>";
    print("Número: ".$x);
    echo "<br>";
    echo "<hr>";
}
//do-while

//for
//será utilizado para ejecutar un bucle un determinao número de veces, hasta que se cumpla una
//condición
echo "<br>"
echo "<h1>if</h1>";
for($x=5; $x=10; $x++)
{
    print("Número: ".$x."<br>");
}

//require
//sirve para incluir archivos en nuestras paginas y solo será necesario hacer  referencia
// a este archivo con la instrución require, se usa principalmente para definir variables,
//y estas estarán listas una  vez hagamos una llamada al archivo donde estén guardadas.

//include
//El funcionamiento es igual que el de la institucion require(, con la diferencia) de que si
//puede procesar el código tantas veces como la llamemos a esa pagina xterna.
echo "<br>"
echo "<h1>incude</h1>";
include("variables.php");
echo "<br>";
print("$x"."$z"."$y);

//switch
//Se utilizara para compronbar un dato entre varias posibilidades
echo "<br>"
echo "<h1>switch</h1>";
$color = "negro";
switch($color)
{
    case "blanco":
        $sector = "claro";
        break;
    case "naranja":
        $sector = "norma";
        break;
    case"negro":
        $sector = "oscuro";
        break;
    }print($sector);


?>

</body>
</html>