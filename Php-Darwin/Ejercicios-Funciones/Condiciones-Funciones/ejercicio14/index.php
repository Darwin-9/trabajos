<?php
    include('libreria/pagoTotal.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago total de el sueldo de una persona</title>
    <script src="js/pagoTotal.js"></script>
</head>
<body>
    <?php
        $diasTrabajados = 20;
        $valorDia = 4500;

        $sueldo = salarioExp($diasTrabajados,$valorDia);
        $subsidioTransporte = subTransExp($diasTrabajados,$valorDia);
        $descuentoSalud = saludExp($diasTrabajados,$valorDia);
        $descuentoPension = pensionExp($diasTrabajados,$valorDia);
        $descuentoArl = arlExp($diasTrabajados,$valorDia);
        $retencionCuenta = retencionExp($diasTrabajados,$valorDia);
        $totalDescuento = deducionesExp($diasTrabajados,$valorDia);
        $pagoTotal = pagoFinalExp($diasTrabajados,$valorDia);

    
        var_dump("Su salario es de:".$sueldo );
        echo "<br>";
        var_dump("El subsidio de transporte es de: " . $subsidioTransporte);
        echo "<br>";
        var_dump("Su descuento en salud es: " . $descuentoSalud);
        echo "<br>";
        var_dump("Su descuento de pensión es: " . $descuentoPension);
        echo "<br>";
        var_dump("Su descuento en arl es: " . $descuentoArl);
        echo "<br>";
        var_dump("Su retención en la cuenta es: " . $retencionCuenta);
        echo "<br>";
        var_dump("El total de deducibles son: " . $totalDescuento);
        echo "<br>";
        var_dump("Su pago tota seria: " . $pagoTotal);


    ?>
</body>
</html>