<?php

$n1 = 2;
$n2 = 5;
$n3 = 3;
$porce1;
$porce2;
$porce3;
$suma;

$porce1= $n1 * 0.2;
$porce2= $n2 * 0.35;
$porce3= $n3 * 0.45;

$suma= $porce1 + $porce2 + $porce3;

echo "El porcentaje de la nota 1 es: ".$porce1."<br>";
echo "El porcentaje de la nota 2 es: ".$porce2."<br>";
echo "El porcentaje de la nota 3 es: ".$porce3."<br>";

if($suma > 4.5){
echo "la calificación es superior ".$suma."<br>";
}
else{
    if($suma <= 4.5 && $suma > 3.5){
        echo "la calificación es buena ".$suma."<br>";
}
else{
    if($suma <= 3.5 && $suma >= 3){
        echo "la calificación es media ".$suma."<br>";
    }
    else{
        echo "la calificación es mala ".$suma."<br>";
    }
}
}

?>