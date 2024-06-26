<?php

$tabla5 = array();
$pares = array();
$impares = array();
$equis = "&nbsp;";
$mult = 1;
$paresSuma = 0;
$imparesSuma = 0;

for ($fila = 0; $fila < 5; $fila++) {
    $tabla5[$fila] = array();
    for ($colum = 0; $colum < 5; $colum++) {
        $tabla5[$fila][$colum] = $mult * 5;
        $mult++;
        
        if ($tabla5[$fila][$colum] % 2 == 0) {
            array_push($pares, $tabla5[$fila][$colum]);
        } else {
            array_push($impares, $tabla5[$fila][$colum]);
        }

        if ($fila === $colum || $fila + $colum === 4) {
            $equis .= $tabla5[$fila][$colum] . "&nbsp;&nbsp;&nbsp;";
        } else {
            $equis .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    $equis .= "<br>";
}

$paresSuma = array_sum($pares);
$imparesSuma = array_sum($impares);

echo "Tabla del 5: <br>";
foreach ($tabla5 as $fila) {
    echo implode("\t", $fila) . "<br>";
}

echo "Pares de la tabla del 5: " . implode(", ", $pares) . "<br>";
echo "Impares de la tabla del 5: " . implode(", ", $impares) . "<br>";
echo "Suma de los pares: " . $paresSuma . "<br>";
echo "Suma de los impares: " . $imparesSuma . "<br>";
echo "Equis de la tabla:<br>" . $equis;

?>
