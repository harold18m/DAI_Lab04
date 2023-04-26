<?php
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

// Calcular precio con descuento
$precio_descuento = $precio * 0.95;

// Calcular importe de la compra
$importe_compra = $cantidad * $precio_descuento;

// Calcular importe del descuento
$importe_descuento = $importe_compra * 0.07;

// Calcular importe a pagar
$importe_pagar = $importe_compra - $importe_descuento;

// Calcular cantidad de caramelos
$cantidad_caramelos = $cantidad * 2;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <div class="bg-white rounded-lg shadow-lg px-6 py-4">
        <h1 class="text-2xl font-bold mb-4">Resultados:</h1>
        <p class="mb-2"><span class="font-bold">Precio actual:</span> S/.
            <?php echo $precio; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Precio con descuento:</span> S/.
            <?php echo $precio_descuento; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Cantidad:</span>
            <?php echo $cantidad; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Obsequio:</span>
            <?php echo "$cantidad_caramelos"." caramelo(s)" ; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Importe a pagar:</span> S/.
            <?php echo $importe_pagar; ?>
        </p>
    </div>
</body>

</html>