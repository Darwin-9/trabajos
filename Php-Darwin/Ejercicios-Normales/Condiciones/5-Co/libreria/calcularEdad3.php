<?php

$anioNac1 = 2010;
$anioNac2 = 2006;
$anioNac3 = 2012;
$anioAct = 2024;

$person1 = $anioAct - $anioNac1;
$person2 = $anioAct - $anioNac2;
$person3 = $anioAct - $anioNac3;

$promedio = ($person1 + $person2 + $person3) / 3;

if($promedio >= 18){
    echo "El promedio de personas es mayor de edad";
}
else{
    echo "El promedio es menor de edad ". "<br>";
}

if($person1 >= 18){
    echo "Es mayor de edad." ."<br>"; 
}
else{
    echo "Es menor de edad." ."<br>";
}
if($person2 >= 18){ 
    echo "Es mayor de edad." ."<br>";
}
else{
    echo "Es menor de edad." ."<br>";
}
if($person3 >= 18){
    echo "Es mayor de edad." ."<br>";
}
else{
    echo "Es menor de edad." ."<br>";
}

?>