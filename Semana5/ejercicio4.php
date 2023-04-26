<?php
$precio_cono = $_POST['precio'];
$cantidad_conos = $_POST['cantidad'];

// Cálculo del importe de la compra
$importe_bruto = $precio_cono * $cantidad_conos;

// Cálculo del primer descuento
$descuento1 = $importe_bruto * 0.05;

// Cálculo del importe después del primer descuento
$importe_desc1 = $importe_bruto - $descuento1;

// Cálculo del segundo descuento
$descuento2 = $importe_desc1 * 0.05;

// Cálculo del importe total a pagar
$importe_total = $importe_desc1 - $descuento2;

//Calculando descuento total
$descuentoTotal= $descuento1 + $descuento2;

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
        <p class="mb-2"><span class="font-bold">Cantidad de conos:</span> S/.
            <?php echo $cantidad_conos; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Precio del cono:</span> S/.
            <?php echo $precio_cono; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Importe bruto:</span> S/.
            <?php echo $importe_bruto; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Importe del descuento total:</span> S/.
            <?php echo $descuentoTotal; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Importe neto a pagar:</span> S/.
            <?php echo $importe_total; ?>
        </p>
    </div>
</body>

</html>