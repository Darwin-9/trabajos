<?php
function salario2($dias,$valordia) {
    $diask=$dias;
    $vdias=$valordia;
    $total_salario= $diask*$vdias;
    return $total_salario;
};
function salud2($dias,$valordia) {
    $pago_salud= salario2($dias,$valordia)*0.12;
    return $pago_salud;
};
function pension2($dias,$valordia) {
    $pago_pension= salario2($dias,$valordia)*0.16;
    return $pago_pension;   
};
function deducible2($dias,$valordia) {
    $pago_deducible = pension2($dias,$valordia) + salud2($dias,$valordia);
    return $pago_deducible;
};
function arl2 ($dias,$valordia) {
    $pago_arl = salario2($dias,$valordia)*0.052;
    return $pago_arl;
};
function pagototal2($dias,$valordia) {
    $pago_total = salario2($dias,$valordia)-deducible2($dias,$valordia);
    return $pago_total;
};
?>