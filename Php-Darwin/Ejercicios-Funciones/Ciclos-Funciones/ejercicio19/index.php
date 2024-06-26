<?php
include('libreria/tabla9.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla 9</title>
    <script src="js/tabla9.js"></script>
</head>
<body>

    <?php

        var_dump(tablaWhile(0,9));
        echo "<br>";
        echo "For() <br>";
        var_dump(tablaFor(0,9));

    ?>
    
</body>
</html>