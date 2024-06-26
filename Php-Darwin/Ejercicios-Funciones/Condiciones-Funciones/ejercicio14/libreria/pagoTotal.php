<?php

function salarioExp ($pDiasTrabajados,$pValorDia) {
    $salarioPersona;
    $salarioPersona = $pDiasTrabajados * $pValorDia;

    return  $salarioPersona;
}

function subTransExp ($pDiasTrabajados,$pValorDia) {
    $salarioMinimo = 1600000;
    $salarioTrans = salarioExp ($pDiasTrabajados,$pValorDia);
    $subTransporte;

    if ($salarioTrans <= 2*$salarioMinimo) {
        $subTransporte = 162000;
    }
    else{
        $subTransporte = 0;
    }
    
    return $subTransporte;
}

function saludExp ($pDiasTrabajados,$pValorDia){
    $pagoSalud;
    $pagoSalud = salarioExp($pDiasTrabajados,$pValorDia) * 0.12;

    return $pagoSalud;
}

function pensionExp($pDiasTrabajados,$pValorDia){
    $pagoPension;
    $pagoPension =salarioExp($pDiasTrabajados,$pValorDia) * 0.16;

    return $pagoPension;
}

function arlExp($pDiasTrabajados,$pValorDia){
    $pagoArl; 
    $pagoArl = salarioExp($pDiasTrabajados,$pValorDia) * 0.052;

    return $pagoArl;
}

function retencionExp($pDiasTrabajados,$pValorDia){
    $reten;
    $salarioMinimo = 1600000;
    $reten = salarioExp($pDiasTrabajados,$pValorDia);

    if ($reten>4*$salarioMinimo) {
        $descuento = $reten * 0.04;
    }
    else{
        $descuento = 0;
    }

    return $descuento;
}

function deducionesExp ($pDiasTrabajados,$pValorDia){
    $descuentos;
    $descuentos = saludExp($pDiasTrabajados,$pValorDia)+pensionExp($pDiasTrabajados,$pValorDia)+arlExp($pDiasTrabajados,$pValorDia) + retencionExp($pDiasTrabajados,$pValorDia);

    return $descuentos;
}

function pagoFinalExp($pDiasTrabajados,$pValorDia){
    $pagoTotal;
    $pagoTotal= salarioExp($pDiasTrabajados,$pValorDia) - deducionesExp($pDiasTrabajados,$pValorDia);

    return $pagoTotal;
}

?>