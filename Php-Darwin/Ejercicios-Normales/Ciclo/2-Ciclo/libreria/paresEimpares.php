<?php

$contar;
$numero;

$contar = 0;
$numero = 5;

while($contar < $numero){
    $contar = $contar + 1;
    if($contar %2==0){
    echo $contar." Es par <br>";
    }
    else{
        echo $contar." Es impar <br>";
    }

}
//Contar hasta 5 con ciclo for
echo "Contar con ciclo for <br>";

for($contar = 1; $contar <= $numero; $contar++){
    if($contar %2==0){
        echo $contar." Es par <br>";
        }
        else{
            echo $contar." Es impar <br>";
        }
}
?>