<?php
function areaMayor($pladCuad1,$pladCuad2,$pladCuad3){ 
    $cuad1 = $pladCuad1;
    $cuad2 = $pladCuad2;
    $cuad3 = $pladCuad3;

    $cuad1 = $pladCuad1 * $pladCuad1;
    $cuad2 = $pladCuad2 * $pladCuad2;
    $cuad3 = $pladCuad3 * $pladCuad3;

    if($cuad1==$cuad2 && $cuad1==$cuad3){
        $result = "Las areas de los cuadrados son iguales";
    }
    else{
        if($cuad1>$cuad2 && $cuad1>$cuad3){
            $result = "El area del cuadrado uno es mayor";
        }
        else{
            if($cuad2>$cuad3 && $cuad2>$cuad1){
                $result ="El area del cuadrado dos es mayor";
            }
            else{
                $result = "El area del cuadrado 3 es mayor";
            }
        }
       
    }
    return $result;
}

?>