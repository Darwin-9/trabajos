<?php
function promedio($pnota1, $pnota2, $pnota3){

        $prom;
        $nota1 = $pnota1;
        $nota2 = $pnota2;
        $nota3 = $pnota3;

        $prom = ($nota1+$nota2+$nota3)/3;

        return $prom;
}


?>