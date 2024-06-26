<?php
function sumar($pnota, $pporcenNota){
    $suma;
    $nota = $pnota;
    $porcenNota = $pporcenNota;

    $suma = $nota * $porcenNota;
    return $suma;
}

$nota1 = sumar(5,0.3);
$nota2 = sumar(3.5,0.3);
$nota3 = sumar(4,0.4);

$suma = $nota1+$nota2+$nota3;

?>

