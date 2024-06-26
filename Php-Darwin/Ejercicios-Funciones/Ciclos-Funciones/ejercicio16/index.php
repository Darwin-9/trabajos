<?php
    include('libreria/contar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar hasta 5 </title>
    <script src="js/contar.js"></script>
</head>
<body>

    <?php
        echo "Con While <br>";
        var_dump(contar(5));
        echo "<br> Con For <br>";
        var_dump(contarExp(5));
    ?>

</body>
</html>