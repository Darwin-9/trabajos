<?php
    $diasTrabajados = 31;
    $valorDia = 50000;
    $salarioMinimo = 1400000;
    $salario;
    $salud;
    $pension;
    $arl;
    $reten;
    $deducibles;
    $subTrans;
    $totalPagar;

    $salario = $valorDia * $diasTrabajados;
    $salud = $salario * 0.12;
    $pension = $salario * 0.16;
    $arl = $salario * 0.052;
    $deducibles = $pension + $arl + $salud;

    if($salario > $salarioMinimo * 4){
        $reten = $salario * 0.04;

        echo "Su retencion e el salario es: ".$reten."<br>";
    }
    else{
        $reten = 0;

        echo "Su retencion e el salario es: ".$reten."<br>";
    }

    if($salario > $salarioMinimo * 2 ){
        $subTrans = 162000;

        echo "Su subsidio de transporte es: ".$subTrans."<br>";
    }
    else{
        $subTrans = 0;

        echo "Su subsidio de transporte es: ".$subTrans."<br>";
    }

    $totalPaga = $salario + $subTrans - $deducibles - $reten;

    echo "Salud: ".$salud."<br>";
    echo "Pension: ".$pension."<br>";
    echo "arl: ".$arl."<br>";
    echo "totalPaga: ".$totalPaga."<br>";

?>