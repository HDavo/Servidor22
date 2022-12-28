<?php 
/*Con el siguiente array de productos, crea una lista de la compra en la que puedas seleccionar la cantidad de productos que quieres adquirir y te muestre el precio total por producto y el total de la factura:

$productos = [
    "naranja" => 1.2,
    "manzana" => 1.5,
    "pera" => 1.8,
    "platano" => 0.8,
    "kiwi" => 0.75,
    "macarrones" => 0.5,
    "arroz" => 0.75,
    "salchichas" => 1,
    "patatas_fritas" => 3,
    "paninis" => 1.5,
    "leche_6_uds" => 5,
    "pizza_jamon_serrano" => 2.59,
    "helado_chocolate" => 2.99
];

Funciones: array_sum (opcional => array_push)
* array_sum: ej: array_sum(array $array): int|float devuelve la suma de los valores de un array.
* array_push: ej: array_push(array &$array, mixed ...$values): int añade un elemento a la última posición del array
*/
    $productos = [
        "naranja" => 1.2,
        "manzana" => 1.5,
        "pera" => 1.8,
        "platano" => 0.8,
        "kiwi" => 0.75,
        "macarrones" => 0.5,
        "arroz" => 0.75,
        "salchichas" => 1,
        "patatas_fritas" => 3,
        "paninis" => 1.5,
        "leche_6_uds" => 5,
        "pizza_jamon_serrano" => 2.59,
        "helado_chocolate" => 2.99
    ];

    function imprimirLista($productos){
        ?>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>

        <?php 
        foreach ($productos as $producto => $precio):
        ?>
        <tr>
            <td><?= $producto ?></td>
            <td><?= $precio ?> €</td>
            <td><input type="number" step="1" min="0" max="99" name="<?= $producto ?>" value="<?= (empty($_GET) || array_keys($productos) != array_keys($_GET))?'0':$_GET[$producto]; ?>"></td>
        </tr>
        <?php
        //empty -> comprueba si una variable está vacia
        //array_keys -> devuelve el índice o clave, sin importar que sea numérico o un string
        endforeach;
        ?>
    <?php
    }

    function generarFactura($productos){
        $cesta = array_intersect_key($_GET, $productos);

        //array_intersect_key -> genera otro array con las claves coincidentes. En este caso, da un array que coincida con lo enviado a través del formulario y el array definido.

        foreach ($cesta as $producto => $cantidad) {
            if ($cantidad != 0) {
                $factura[$producto] = $productos[$producto]*$cantidad;
            }
        }

        if (!empty($factura)) {
            crearFactura($factura);
        }
    }

    function crearFactura($factura){ ?>
        <h2>Factura</h2>
        <table>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
            </tr>

            <?php foreach ($factura as $producto => $precio) : ?>
            <tr>
                <td><?= $producto ?></td>
                <td><?= $precio ?> €</td>
            </tr>
            <?php endforeach; ?>
                <tr>
                    <td><b>Total:</b></td>
                    <td><?= array_sum($factura) ?>€</td>
                </tr>
        </table>
        <?php 
    }
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej5_sum_intersectKey_keys</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 2px 5px;
            margin: 10px 0 12px;
            background-color: papayawhip;
        }

        input[type=number] {
            width: 98%;
        }

        input[type=submit] {
            height: 100%;
            width: 98%;
        }

        .medio {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="medio">
        <form action="" method="get">
            <div class="lista">
                <h2>Lista de la compra</h2>
    
                <table>
                    <?php imprimirLista($productos) ?>
        
                    <tr>
                        <td colspan="3"><input type="submit" value="Enviar"></td>
                    </tr>
                </table>
            </div>
    
        </form>
        <div class="factura">
        <?php
            if (!empty($_GET)) {
                generarFactura($productos);
            }
        ?>
    </div>
</body>
</html>