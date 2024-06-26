<?php

$tabla1;
$tabla2;
$tablaPar;
$tablaImpar;
$limit1;
$limit2;
$result;


$tablaPar = 1;
$tablaImpar =  1;
$limit1 = 5;
$limit2  = 5;
$tablaPar = 0;
$tablaImpar = 0;

for($tabla1 = 1; $tabla1 <= $limit1; $tabla1++){

    for($tabla2 = 1; $tabla2 <= $limit2; $tabla2++){

        $result = $tabla1 * $tabla2;

        echo $tabla1."x".$tabla2."=".$result."<br>";

        if($result %2==0){
            echo "buzz"."<br>";
            $tablaPar = $tablaPar + 1;

        }
        else{
            echo "bass"."<br>";
            $tablaImpar = $tablaImpar + 1;
        }

    }

} 
echo "pares ".$tablaPar."<br>";
echo "impares ".$tablaImpar."<br>";

echo "Ciclo con WHile"."<br>";

$tabla1;
$tabla2;
$tablaPar;
$tablaImpar;
$limit1;
$limit2;
$result;

$tabla1 = 0;
$limit1 = 5;
$limit2 = 5;

$tablaPar  = 0;
$tablaIpar = 0;

while($tabla1 < $limit1){
    $tabla1 = $tabla1 + 1;
    $tabla2 = 0;

    while($tabla2 < $limit2){
        $tabla2 = $tabla2 + 1;
        $result = $tabla1 * $tabla2;

        echo $tabla1."x".$tabla2."=".$result."<br>";

        if($result %2==0){
            echo "Buzz"."<br>";

            $tablaPar = $tablaPar + 1;

        }
        else{
            echo "Bass"."<br>";

            $tablaIpar = $tablaIpar + 1;
        }

    }

}
    echo "pares".$tablaPar."<br>";
    echo "impares".$tablaIpar."<br>";

?>