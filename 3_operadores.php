<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php
    //Operadores aritmeticos
    // Suma: +
    // Resta: -
    // Multiplicacion: *
    // Division: /
    // Modulo: %
    // Incremento: ++
    // Decremento: --
    // Exponencial: **
    echo "<h1>Operadores Aritmeticos</h1><br>";
    $x = 9;
    echo ("x = ".$x. "<br>");
    $y = 3;
    echo ("y = ".$y. "<br>");
    $z= 5;
    echo ("z = ".$z. "<br>");
    $suma = $x + $y;
    echo ("suma = ".$suma. "<br>");
    $resta = $x - $z;
    echo ("resta = ".$resta. "<br>");
    $multiplicacion = $suma*$resta;
    echo ("multiplicacion  = ".$multiplicacion. "<br>");
    $final = $multiplicacion++;
    echo ("final = ".$final. "<br>");
    echo ("multiplicacion = ".$multipliccion. "<br>");

    echo $multiplicacion;
    //Operadores de comparacion
    //igual: ==
    //identico: ===
    //diferente; !=
    //menor; <
    //mayor: >
    //menor o igual: <=
    //mayor o igual: >=
    echo "<h1>Operadores de comparacion</h1><br>";
    $x = 5;
    $y = 5;
    echo($x == $y);
    echo($x <= $y);
    //Operadores logicos 
    // AND o &&: $a && $b es True si $a y $b son verdaderos
    // OR o ||: $a || $b es True si $a o $b son veraderos 
    // XOR: $a XOR $b es True si $a es verdadero o $b es verdadero, pero no los dos
    // !: !$a es True si $a es False
    echo "<h1>Operadores logicos</h1><br>";
    $x = 4;
    $y = 5;

    if(($x==4) && ($y==5))
    {
        print("Estas en lo correcto");
    }
    echo "<br>";
    if (($x==4) OR ($y==3))
    {
        print("la segunda operacion tambien es correcta");
    }
    //Operadores de union (concatenacion) de cadenas
    // Para la umion de cadenas se emplea el punto (.)
    echo "<h1>Operadores de union de cadenas </h1><br>";
    $t = "Ejemplo";
    $w = "union";
    $x = "de";
    $y = "cadenas";
    $z = "";
    $resultante1 = $t;
    $resultante2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo "<b></b>";
    echo $resultado1;
    echo "<hr>";
    echo $resultado2;
    echo "</b<>/h1>";

    ?> 
</body>
</html>

