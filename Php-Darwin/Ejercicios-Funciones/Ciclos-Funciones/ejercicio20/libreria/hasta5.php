<?php
function tablas9While($ptabla1, $ptabla2, $plimit1, $plimit2, $ptablaPar, $ptablaImpar) {
    $tabla1 = $ptabla1;
    $tabla2 = $ptabla2;
    $limit1 = $plimit1;
    $limit2 = $plimit2;
    $tablaPar = $ptablaPar;
    $tablaImpar = $ptablaImpar;

    $tabla1 = 0;

    while ($tabla1 < $limit1) {
        $tabla1++;
        $tabla2 = 0;
        while ($tabla2 < $limit2) {
            $tabla2++;
            $result = $tabla1 * $tabla2;

            echo $tabla1 . " x " . $tabla2 . " = " . $result . "<br>";

            if ($result % 2 == 0) {
                echo "Buzz <br>";
                $tablaPar++;
            } else {
                echo "Bass <br>";
                $tablaImpar++;
            }
        }
    }
    return "Pares: " . $tablaPar . " Impar: " . $tablaImpar . "\nFinal";
}



function tablas9For($ptabla1, $ptabla2, $plimit1, $plimit2, $ptablaPar, $ptablaImpar) {
    $tabla1 = $ptabla1;
    $tabla2 = $ptabla2;
    $limit1 = $plimit1;
    $limit2 = $plimit2;
    $tablaPar = $ptablaPar;
    $tablaImpar = $ptablaImpar;

    for ($tabla1 = 1; $tabla1 <= $limit1; $tabla1++) {
        for ($tabla2 = 1; $tabla2 <= $limit2; $tabla2++) {
            $result = $tabla1 * $tabla2;
            echo $tabla1 . " x " . $tabla2 . " = " . $result .  "<br>";

            if ($result % 2 == 0) {
                echo "Buzz <br>";
                $tablaPar++;
            } else {
                echo "Bass <br>";
                $tablaImpar++;
            }
        }
    }
    return "Pares: " . $tablaPar . " Impar: " . $tablaImpar . "\nFinal";
}

?>



