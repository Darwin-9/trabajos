<?php
function numeros($pnumUno,$pnumDos){
    $numero;
    $numUno = $pnumUno;
    $numDos = $pnumDos;

    if($numUno==$numDos){
        $numero = "Son iguales";
    } else if($numUno>$numDos){
        $numero = "Numero 1 es mayor";
    } else{
        $numero = "Numero 2 es mayor";
    }

    return $numero;
}
?>
