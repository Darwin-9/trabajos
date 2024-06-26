<?php
    include('libreria/areas.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/areas.js"></script>
</head>
<body>
    <?php
        var_dump("triangulo: ".figuras("triangulo",14,36));
        echo "<br>";
        var_dump("cuadrado: ".figuras("cuadrado",55,55));
        echo "<br>";
        var_dump("rectangulo: ".figuras("rectangulo",55,14));
        echo "<br><br>";
        
    ?>
</body>
</html>