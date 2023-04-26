<?php
$tarifa = $_POST['tarifa'];
$cantidad_días_alquiler = $_POST['cantidad'];

// Importe bruto
$importe_bruto = $tarifa * $cantidad_días_alquiler;

// Calcular importe del descuento
$importe_descuento = $importe_bruto * 0.15;

// Calcular importe a pagar
$importeNeto_pagar = $importe_bruto - $importe_descuento;

// Calcular cantidad de lapiceros
$cantidad_lapiceros = $cantidad_días_alquiler * 3;

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
        <p class="mb-2"><span class="font-bold">Importe bruto:</span> S/.
            <?php echo $importe_bruto; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Importe del descuento:</span> S/.
            <?php echo $importe_descuento; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Importe neto a pagar:</span> S/.
            <?php echo $importeNeto_pagar; ?>
        </p>
        <p class="mb-2"><span class="font-bold">Obsequio:</span>
            <?php echo "$cantidad_lapiceros"." lapicero(s)" ; ?>
        </p>
    </div>
</body>
</html>