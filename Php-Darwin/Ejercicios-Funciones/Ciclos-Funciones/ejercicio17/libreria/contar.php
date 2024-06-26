<?php

function contar1a5($contandos) {
    $contar=$contandos;
    $numero=5;

    for ($contar ; $contar <= $numero; $contar++) {
        if ($contar%2==0) {
            echo $contar." Es par"."<br>";
        } else {
            echo $contar." Es impar"."<br>";
        } 
    }
    return "Finalizacion";
};


function contar1a5W($contando) {
    $contar=$contando;
    $numero=4;
    while ($contar<=$numero) {
        $contar++;
        if ($contar%2==0) {
            echo $contar." Es par"."<br>";
        } else {
            echo $contar." Es impar"."<br>";
        }
    }
    return "Fin";
};


?>