<?php

$contar;
$numero;

$contar = 0;
$numero = 5;

while($contar < $numero){
    $contar = $contar + 1;
    echo $contar."<br>";
}  
//Contar hasta 5 con ciclo for
echo "Contar con ciclo for"."<br>";

for($contar = 1; $contar <= $numero; $contar++){
    echo $contar."<br>";
}

?>