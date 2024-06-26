<?php

function tablaWhile($pmultiplicar, $pnumero) {
    $multiplicar = $pmultiplicar;
    $numero = $pnumero;
    $result;

    while ($multiplicar < $numero) {
        $multiplicar = $multiplicar + 1;
        $result = $multiplicar * $numero;
        echo $numero . " x " . $multiplicar . " = " . $result . "<br>";
    }
    return "Final";
}


function tablaFor($pmultiplicar, $pnumero) {
    $numero = $pnumero;
    $result;

    for ($multiplicar = 1; $multiplicar <= $numero; $multiplicar++) {
        $result = $multiplicar * $numero;
        echo $numero . " x " . $multiplicar . " = " . $result . "<br>";
    }
    return "Final";
}

?>
