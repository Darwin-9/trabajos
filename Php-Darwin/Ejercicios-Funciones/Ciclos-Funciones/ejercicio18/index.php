<?php
include ('libreria/tabla5.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla5</title>
    <script src="js/tabla5.js"></script>
</head>
<body>

    <?php

        var_dump(tablaWhile(1,5));
        echo "For <br>";
        var_dump(tablaFor(1,5));

    ?>
    
</body>
</html>