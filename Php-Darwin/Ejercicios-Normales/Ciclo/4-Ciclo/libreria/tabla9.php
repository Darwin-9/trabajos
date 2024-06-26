<?php

$multi;
$num1;
$num2;
$result;

$multi = 0;
$num1 = 9;
$num2 = 5;

while($multi < $num2){
    $multi = $multi + 1;
    $result = $multi * $num1;
    
    if($result %2==0){
        echo $num1."x".$multi."=".$result." Es par <br>";
    }
    else{
        echo $num1."x".$multi."=".$result." Es impar <br>";
    }
}

//Contar hasta 5 con ciclo for

echo "Contar con ciclo for <br>";

for($multi = 1; $multi <= $num2; $multi++){
    $result = $multi * $num1;
    if($result %2==0){
        echo $num1."x".$multi."=".$result." Es par <br>";
    }
    else{
        echo $num1."x".$multi."=".$result." Es impar <br>";
    }
} 
?>