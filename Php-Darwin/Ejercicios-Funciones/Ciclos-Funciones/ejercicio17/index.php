<?php
    include('libreria/contar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contar numeros pares e impares </title>
    <script src="js/contar.js"></script>
</head>
<body>

    <?php
        echo "Con for <br>";
        var_dump(contar1a5(0));
        echo "Con While <br>";
        var_dump(contar1a5W(0));
    ?>

</body>
</html>