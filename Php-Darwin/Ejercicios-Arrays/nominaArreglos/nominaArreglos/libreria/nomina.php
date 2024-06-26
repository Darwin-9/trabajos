<?php

function salarioPer($pvalorDia, $pdiasTrabajados) {
    $valorDia = $pvalorDia;
    $diasTrabajados = $pdiasTrabajados;
    $sueldoPe = $valorDia * $diasTrabajados;
    return $sueldoPe;
}

function saludPer($sueldoPe) {
    $salario = $sueldoPe;
    $saludPe = $salario * 0.12;
    return $saludPe;
}

function pensionPer($sueldoPe) {
    $salario = $sueldoPe;
    $pensionPe = $salario * 0.16;
    return $pensionPe;
}

function arlPer($sueldoPe) {
    $salario = $sueldoPe;
    $arlPe = $salario * 0.052;
    return $arlPe;
}

function retencionPer($sueldoPe) {
    $salario = $sueldoPe;
    $retencionPe = 0;

    if ($salario > 13200000) {
        $retencionPe = $salario * 0.08;
    } elseif ($salario > 9200000 && $sueldoPe <= 13200000) {
        $retencionPe = $salario * 0.04;
    } elseif ($salario > 6900000 && $sueldoPe <= 9200000) {
        $retencionPe = $salario * 0.02;
    }

    return $retencionPe;
}

function subTransportePer($sueldoPe) {
    $salario = $sueldoPe;
    $subTransporte = 0;

    if ($salario < 2300000) {
        $subTransporte = 120000;
    }

    return $subTransporte;
}

function totalPagarPer($sueldoPe, $psalud, $ppension, $parl, $psubTransporte, $pretencion) {
    $salario = $sueldoPe;
    $saludPe = $psalud;
    $pensionPe = $ppension;
    $arlPe = $parl;
    $subTransporte = $psubTransporte;
    $retencionPe = $pretencion;

    $totalPagarPe = $salario + $subTransporte - ($saludPe + $pensionPe + $arlPe + $retencionPe);
    return $totalPagarPe;
}

?>

