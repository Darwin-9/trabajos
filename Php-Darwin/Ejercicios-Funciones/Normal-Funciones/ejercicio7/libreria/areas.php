<?php
 function areaCuadrado2($pnumeroUno,$pnumeroDos){
    $pnumeroUno = $pnumeroUno;
    $pnumeroDos = $pnumeroDos;
   
    $areaCuadrado = $pnumeroUno * $pnumeroDos;
    return $areaCuadrado;
};
function areaTriagulo2($pnumeroUno,$pnumeroDos){
    $pnumeroUno = $pnumeroUno;
    $pnumeroDos = $pnumeroDos;

    $areaTriagulo = ($pnumeroUno * $pnumeroDos)/2;
    return $areaTriagulo;
};
function areaRectangulo2($pnumeroUno,$pnumeroDos){
    $pnumeroUno = $pnumeroUno;
    $pnumeroDos = $pnumeroDos;
    $areaRectangulo = $pnumeroUno * $pnumeroDos;   
    return $areaRectangulo;
};

function figuras ($figura,$pnumeroUno, $pnumeroDos){
   $pnumeroUno = $pnumeroUno;
   $pnumeroDos = $pnumeroDos;
   $figura = $figura;

   if ($figura == "cuadrado") {
       $area = areaCuadrado2($pnumeroUno,$pnumeroDos);
   } else if ($figura == "rectangulo") {
       $area = areaRectangulo2($pnumeroUno, $pnumeroDos);
   } else if ($figura == "triangulo") {
       $area = areaTriagulo2($pnumeroUno, $pnumeroDos);
   } else {
       $area = "Error!!! no se puede operar";
   }

   return $area;
};
?>

