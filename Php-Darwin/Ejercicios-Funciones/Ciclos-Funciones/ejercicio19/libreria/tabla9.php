<?php
function tablaWhile($pmultiplicar, $pnumero) {
    $multiplicar = $pmultiplicar;
    $numero = $pnumero;
    $result;

    while ($multiplicar < $numero) {
        $multiplicar++;
        $result = $multiplicar * $numero;
        echo $numero . " x " . $multiplicar . " = " . $result . "<br>";
        if ($result % 2 == 0) {
            echo "Es Par <br>";
        } else {
            echo "Es Impar <br>";
        }
    }
    return "Fin";
}


function tablaFor($pmultiplicar, $pnumero) {
    $numero = $pnumero;
    $result;

    for ($multiplicar = 1; $multiplicar <= $numero; $multiplicar++) {
        $result = $multiplicar * $numero;
        echo $numero . " x " . $multiplicar . " = " . $result . "<br>";
        if ($result % 2 == 0) {
            echo "Es Par <br>";
        } else {
            echo "Es Impar <br>";
        }
    }
    return "Fin";
}

?>

