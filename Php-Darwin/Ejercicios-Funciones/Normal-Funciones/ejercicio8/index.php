<?php
    include('libreria/pagoTotal.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pago de una persona</title>
    <script src="js/pagoTotal.js"></script>
</head>
<body>
<?php
        $dias=50;
        $valordia=776000;
        var_dump("El salario es: ". salario2($dias,$valordia));
        echo "<br>";
        var_dump("El arl es: ". arl2($dias,$valordia));
        echo "<br>";
        var_dump("La salud es: ". salud2($dias,$valordia));
        echo "<br>";
        var_dump("El deducible es: ".deducible2($dias,$valordia));
        echo "<br>";
        var_dump("La pension es: ".pension2($dias,$valordia));
    ?>
</body>
</html>