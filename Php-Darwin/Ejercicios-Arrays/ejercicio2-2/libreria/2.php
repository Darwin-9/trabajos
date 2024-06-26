<?php

$arreglo = array();
$pares = array();
$impares = array();

for ($iterar = 1; $iterar <= 10; $iterar++) {
    array_push($arreglo, $iterar);

    if ($iterar % 2 == 0) {
        array_push($pares, $iterar);
    } else {
        array_push($impares, $iterar);
    }
}

echo "Numeros: " . implode(", ", $arreglo) . "<br>";
echo "Numeros pares: " . implode(", ", $pares) . "<br>";
echo "Numeros impares: " . implode(", ", $impares) . "<br>";


?>