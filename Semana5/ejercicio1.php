<?php
$importe_total_vendido = $_POST["importe_total_vendido"];
$cantidad_de_hijos_en_edad_escolar = $_POST["cantidad_de_hijos_en_edad_escolar"];

//Cálculo de la comisión
$comision = $importe_total_vendido * 0.075;

//Cálculo de la bonificación por hijos escolares
$bonificacion = $cantidad_de_hijos_en_edad_escolar * 50;

//Cálculo del sueldo bruto
$sueldo_bruto = 600 + $comision + $bonificacion;

//Cálculo del descuento
$descuento = $sueldo_bruto * 0.11;

//Cálculo del sueldo bruto
$sueldo_neto = $sueldo_bruto - $descuento;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <div class="bg-white rounded-lg shadow-lg px-6 py-4">
        <h1 class="text-2xl font-bold mb-4">Resultados:</h1>
        <p class="mb-2"><span class="font-bold">La comisión del vendedor es:</span> S/.
            <?php echo $comision; ?>
        </p>
        <p class="mb-2"><span class="font-bold">La bonificación del vendedor es:</span> S/.
            <?php echo $bonificacion; ?>
        </p>
        <p class="mb-2"><span class="font-bold">El sueldo bruto del vendedor es:</span> S/.
            <?php echo $sueldo_bruto; ?>
        </p>
        <p class="mb-2"><span class="font-bold">El descuento del vendedor es:</span> S/.
            <?php echo $descuento; ?>
        </p>
        <p class="mb-2"><span class="font-bold">El sueldo neto del vendedor es:</span> S/.
            <?php echo $sueldo_neto; ?>
        </p>
    </div>
</body>

</html>