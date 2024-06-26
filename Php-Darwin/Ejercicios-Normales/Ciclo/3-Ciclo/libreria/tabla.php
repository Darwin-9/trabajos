<?php
$multiplicar;
$numero;
$resultado;

$multiplicar = 0;
$numero = 5;

    while($multiplicar < $numero){
        $multiplicar = $multiplicar + 1;
        $resultado = $multiplicar * $numero;
        echo $numero."x".$multiplicar."=".$resultado."<br>";
    }

//Contar hasta 5 con ciclo for

    echo "Contar con ciclo for <br>";

    for($multiplicar = 1; $multiplicar <= $numero; $multiplicar++){
        $resultado = $multiplicar * $numero;
        echo $numero."x".$multiplicar."=".$resultado."<br>";
    }
?>