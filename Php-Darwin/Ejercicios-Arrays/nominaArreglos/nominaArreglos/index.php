<?php
    include('libreria/nomina.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/nomina.js"></script>
</head>
<body>
    <?php
    $registro1= [];

    $registro2 = [];

    $nuevoRegistro;
    $numeroRegistros;
    $iterar;
    $sueldoPe;
    $saludPe;
    $pensionPe;
    $arlPe;
    $subTransPe;
    $retencionPe;
    $totalPagarPe;
    
    
    $registro1 = [
        ["id" => 1, "nombres" => "Pedrito", "apellidos" => "Alimaña", "cargo" => "Ladron", "valorDia" => 70000, "diasTrabajados" => 30],
        ["id" => 2, "nombres" => "Haaland", "apellidos" => "Alimaña", "cargo" => "Sicario", "valorDia" => 4000000, "diasTrabajados" => 30],
        ["id" => 3, "nombres" => "Lucia", "apellidos" => "Alimaña", "cargo" => "Pescadora", "valorDia" => 200000, "diasTrabajados" => 20],
        ["id" => 4, "nombres" => "Maria", "apellidos" => "Alimaña", "cargo" => "Empresaria", "valorDia" => 60000, "diasTrabajados" => 27],
        ["id" => 5, "nombres" => "Sancho", "apellidos" => "Alimaña", "cargo" => "Militar", "valorDia" => 500000, "diasTrabajados" => 30],
        ["id" => 6, "nombres" => "Denis", "apellidos" => "Alimaña", "cargo" => "Camarero", "valorDia" => 40000, "diasTrabajados" => 30],
        ["id" => 7, "nombres" => "Panza", "apellidos" => "Alimaña", "cargo" => "Marino", "valorDia" => 700000, "diasTrabajados" => 30],
        ["id" => 8, "nombres" => "Juan", "apellidos" => "Alimaña", "cargo" => "Ingeniero Civil", "valorDia" => 600000, "diasTrabajados" => 16],
        ["id" => 9, "nombres" => "Crano", "apellidos" => "Alimaña", "cargo" => "Chirri", "valorDia" => 1000000, "diasTrabajados" => 30],
        ["id" => 10, "nombres" => "Carlos", "apellidos" => "Alimaña", "cargo" => "Vendedor ambulante", "valorDia" => 414000, "diasTrabajados" => 17]
    ];
    
    $nuevoRegistro = ["id" => 11, "nombres" => "Pepa", "apellidos" => "Alimaña", "cargo" => "Pescadora", "valorDia" => 650000, "diasTrabajados" => 30];
    $registro1[] = $nuevoRegistro;
    
    $numeroRegistros = count($registro1);

    for ($iterar = 0; $iterar < $numeroRegistros; $iterar++) {
        $sueldoPe = salarioPer($registro1[$iterar]['diasTrabajados'], $registro1[$iterar]['valorDia']);
        $saludPe = saludPer($sueldoPe);
        $pensionPe = pensionPer($sueldoPe);
        $arlPe = arlPer($sueldoPe);
        $subTransPe = subTransportePer($sueldoPe);
        $retencionPe = retencionPer($sueldoPe);
        $totalPagar = totalPagarPer($sueldoPe, $saludPe, $pensionPe, $arlPe, $subTransPe, $retencionPe);
    
        $registro2[$iterar] = [
            "id" => $registro1[$iterar]['id'],
            "nombres" => $registro1[$iterar]['nombres'],
            "apellidos" => $registro1[$iterar]['apellidos'],
            "cargo" => $registro1[$iterar]['cargo'],
            "salario" => $sueldoPe,
            "subTransporte" => $subTransPe,
            "salud" => $saludPe,
            "pension" => $pensionPe,
            "arl" => $arlPe,
            "retencion" => $retencionPe,
            "totalPagar" => $totalPagar
        ];
    
        echo "ID: " . $registro2[$iterar]['id'] . "<br>" .
             "Nombre: " . $registro2[$iterar]['nombres'] . "<br>" .
             "Apellido: " . $registro2[$iterar]['apellidos'] . "<br>" .
             "Cargo: " . $registro2[$iterar]['cargo'] . "<br>" .
             "Salario: " . $registro2[$iterar]['salario'] . "<br>" .
             "Subtransporte: " . $registro2[$iterar]['subTransporte'] . "<br>" .
             "Salud: " . $registro2[$iterar]['salud'] . "<br>" .
             "Pension: " . $registro2[$iterar]['pension'] . "<br>" .
             "Arl: " . $registro2[$iterar]['arl'] . "<br>" .
             "Retencion: " . $registro2[$iterar]['retencion'] . "<br>" .
             "Total: " . $registro2[$iterar]['totalPagar'] . "<br><br>";
    }
   
    
    ?>
</body>
</html>