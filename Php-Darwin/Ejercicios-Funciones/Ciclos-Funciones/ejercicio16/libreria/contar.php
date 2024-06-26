<?php
function contar($pnumero) {
    $numero = $pnumero;
    $contador = 1;
    $resultadoContar= "";

    while($contador <= $numero){
        
        $resultadoContar .=$contador;
        $contador =$contador +1;
    }
    return $resultadoContar;
}

function contarExp($pnumero) {
    $contador;
    $numero= $pnumero;
    $resultadoContar = "";
    
    for($contador=1; $contador<= $numero; $contador++){
        $resultadoContar .=$contador;
    }
    return $resultadoContar;
}
?>