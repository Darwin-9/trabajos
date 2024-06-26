<?php

$tabla9 = array();
$pares = array();
$impares = array();
$equis = "&nbsp;";
$mult = 1;
$paresSuma = 0;
$imparesSuma = 0;

for ($fila = 0; $fila < 5; $fila++) {
    $tabla9[$fila] = array();
    for ($colum = 0; $colum < 5; $colum++) {
        $tabla9[$fila][$colum] = $mult * 9;
        $mult++;

        if ($tabla9[$fila][$colum] % 2 == 0) {
            array_push($pares, $tabla9[$fila][$colum]);
        } else {
            array_push($impares, $tabla9[$fila][$colum]);
        }

        if ($fila === $colum || $fila + $colum === 4) {
            $equis .= $tabla9[$fila][$colum] . "&nbsp;&nbsp;&nbsp;";
        } else {
            $equis .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    $equis .= "<br>";
}
$paresSuma = array_sum($pares);
$imparesSuma = array_sum($impares);

echo "Tabla del 9: <br>";
foreach ($tabla9 as $fila) {
    echo implode("\t", $fila) . "<br>";
}

echo "Pares de la tabla del 9: " . implode(", ", $pares) . "<br>";
echo "Impares de la tabla del 9: " . implode(", ", $impares) . "<br>";
echo "Suma de los pares: " . $paresSuma . "<br>";
echo "Suma de los impares: " . $imparesSuma . "<br>";
echo "Equis de la tabla:<br>" . $equis;

?>
