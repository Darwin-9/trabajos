<?php
    include('libreria/restaMultiDivi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resta, multiplicacion, division</title>
    <script src="js/restaMultiDivi.js"></script>
</head>
<body>
    

    <?php
        var_dump(operacion("resta",4,6));
        var_dump(operacion("multiplicacion",4,6));
        var_dump(operacion("division",4,6));
    ?>
    

</body>
</html>