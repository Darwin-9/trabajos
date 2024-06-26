<?php
function edades($pedad){
    $edad = $pedad;

    if($edad >= 18){
        $edad = "Es mayor de edad ";
    }else{
        $edad = "Es menor de edad ";
    }

    return $edad;
}
?>