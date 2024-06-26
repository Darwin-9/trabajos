<?php

$numeroUno;
$numeroDos;

function resta($pnumeroUno,$pnumeroDos){ // parametros
   $restar;
   $numeroUno = $pnumeroUno;
   $numeroDos = $pnumeroDos;

   $restar = $pnumeroUno - $pnumeroDos;
   return $restar;
}
function multiplicacion($pnumeroUno,$pnumeroDos){
   $multiplicar;
   $numeroUno = $pnumeroUno;
   $numeroDos = $pnumeroDos;

   $multiplicar = $pnumeroUno * $pnumeroDos;
   return $multiplicar;
}
function division($pnumeroUno,$pnumeroDos){
   $dividor;
   $numeroUno = $pnumeroUno;
   $numeroDos = $pnumeroDos;

   $dividor = $pnumeroUno / $pnumeroDos;
   return $dividor;
}
function operacion($poperador,$pnumeroUno,$pnumeroDos){
   $operador = $poperador;
   $numeroUno = $pnumeroUno;
   $numeroDos = $pnumeroDos;
    if ($operador == "resta") {
       $operacionResultado = resta($pnumeroUno,$pnumeroDos);
    }else if ($operador == "multiplicacion") {
       $operacionResultado = multiplicacion($pnumeroUno,$pnumeroDos);
    }else if ($operador == "division") {
       $operacionResultado = division($pnumeroUno,$pnumeroDos);
    }else{
       $operacionResultado = "Error!!! no se puede operar";
    }
    return $operacionResultado;
}

?>