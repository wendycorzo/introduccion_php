<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1>Cierres y ámbito</h1>
    <?php
// Un carro de compras básico que contiene una lista de productos añadidos
// y la cantidad de cada producto. Incluye un método que
// calcula el precio total de los artículos del carro usando un
// cierre como llamada de retorno.
class Carro
{
    const PRECIO_MANTEQUILLA = 1.00;
    const PRECIO_LECHE       = 3.00;
    const PRECIO_HUEVOS      = 6.95;

    protected $productos = array();

    public function añadir($producto, $cantidad)
    {
        $this->productos[$producto] = $cantidad;
    }

    public function obtenerCantidad($producto)
    {
        return isset($this->productos[$producto]) ? $this->productos[$producto] :
               FALSE;
    }

    public function obtenerTotal($impuesto)
    {
        $total = 0.00;

        $llamadaDeRetorno =
            function ($cantidad, $producto) use ($impuesto, &$total)
            {
                $precioUnidad = constant(__CLASS__ . "::PRECIO_" .
                    strtoupper($producto));
                $total += ($precioUnidad * $cantidad) * ($impuesto + 1.0);
            };

        array_walk($this->productos, $llamadaDeRetorno);
        return round($total, 2);
    }
}

$mi_carro = new Carro;

// Añadir algunos artículos al carro
$mi_carro->añadir('mantequilla', 1);
$mi_carro->añadir('leche', 3);
$mi_carro->añadir('huevos', 6);

// Imprimir el total con un impuesto de venta del 5%.
print $mi_carro->obtenerTotal(0.05) . "\n";
// El resultado es 54.29
?>
