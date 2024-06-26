<?php

$lado1 = 5;
$lado2 = 10;
$lado3 = 15;

$cuad1 = $lado1 * $lado1;
$cuad2 = $lado2 * $lado2;
$cuad3 = $lado3 * $lado3;

if($cuad1 == $cuad2 && $cuad1 == $cuad3 && $cuad2 == $cuad3){
    echo "Todos los cuadrados son iguales ";
}
else if($cuad1 > $cuad2 && $cuad1 > $cuad3){
    echo "El area del primer cuadrado es mayor ".$cuad1;
}
else if($cuad2 > $cuad1 && $cuad2 > $cuad3){
    echo "El area del segundo cuadrado es mayor ".$cuad2;
}
else{
    echo "El area del tercer cuadrado es mayor ".$cuad3;
}

?>