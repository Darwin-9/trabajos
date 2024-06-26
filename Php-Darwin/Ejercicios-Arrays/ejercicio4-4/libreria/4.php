<?php

$tabla2 = array();
$letraB = array();
$letraI = array();
$letraN = array();
$letraG = array();
$letraO = array();
$num = 1;

for ($fil = 0; $fil < 5; $fil++) {
    $tabla2[$fil] = array();

    for ($colum = 0; $colum < 5; $colum++) {
        $tabla2[$fil][$colum] = $num * 2;

        if ($colum === 0) {
            array_push($letraB, $tabla2[$fil][$colum]);
        } elseif ($colum === 1) {
            array_push($letraI, $tabla2[$fil][$colum]);
        } elseif ($colum === 2) {
            array_push($letraN, $tabla2[$fil][$colum]);
        } elseif ($colum === 3) {
            array_push($letraG, $tabla2[$fil][$colum]);
        } elseif ($colum === 4) {
            array_push($letraO, $tabla2[$fil][$colum]);
        }

        $num++;
    }
}


echo "B = " . implode(", ", $letraB) . "<br>";
echo "I = " . implode(", ", $letraI) . "<br>";
echo "N = " . implode(", ", $letraN) . "<br>";
echo "G = " . implode(", ", $letraG) . "<br>";
echo "O = " . implode(", ", $letraO) . "<br>";

?>
