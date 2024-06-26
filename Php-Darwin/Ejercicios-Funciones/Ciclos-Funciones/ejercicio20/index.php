<?php
    include('libreria/hasta5.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasta 5</title>
    <script src="js/hasta5.js"></script>
</head>
<body>

    <?php

        var_dump(tablas9While(0,0,5,5,0,0));
        echo "<br><br>";
        echo "For <br>";
        var_dump(tablas9For(0,0,5,5,0,0));

    ?>
    
</body>
</html>




