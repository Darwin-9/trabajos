const salario = function(pDiasTrabajados,pValorDia) {
    let salarioPersona
    salarioPersona = pDiasTrabajados * pValorDia

    return  salarioPersona
}

const subTrans = function (pDiasTrabajados,pValorDia) {
    let salarioMinimo = 1600000
    let salarioTrans = salario (pDiasTrabajados,pValorDia)
    let subTransporte

    if (salarioTrans<=2*salarioMinimo) {
        subTransporte = 162000
    }
    else{
        subTransporte = 0
    }
    
    return subTransporte
}

const salud = function (pDiasTrabajados,pValorDia){
    let pagoSalud
    pagoSalud = salario(pDiasTrabajados,pValorDia) * 0.12

    return pagoSalud
}

const pension = function(pDiasTrabajados,pValorDia){
    let pagoPension
    pagoPension =salario(pDiasTrabajados,pValorDia) * 0.16

    return pagoPension
}

const arl = function(pDiasTrabajados,pValorDia){
    let pagoArl 
    pagoArl = salario(pDiasTrabajados,pValorDia) * 0.052

    return pagoArl
}

const retencion = function(pDiasTrabajados,pValorDia){
    let reten
    let salarioMinimo = 1600000
    reten = salario(pDiasTrabajados,pValorDia)

    if (reten>4*salarioMinimo) {
        descuento = reten * 0.04
    }
    else{
        descuento = 0
    }

    return descuento
}

const deduciones = function (pDiasTrabajados,pValorDia){
    let descuentos
    descuentos = salud(pDiasTrabajados,pValorDia) + pension(pDiasTrabajados,pValorDia) + arl(pDiasTrabajados,pValorDia) + retencion(pDiasTrabajados,pValorDia)

    return descuentos
}

const pagoFinal = function(pDiasTrabajados,pValorDia){
    let pagoTotal
    pagoTotal= salario(pDiasTrabajados,pValorDia) - deduciones(pDiasTrabajados,pValorDia) 

    return pagoTotal
}

function salarioExp (pDiasTrabajados,pValorDia) {
    let salarioPersona
    salarioPersona = pDiasTrabajados * pValorDia

    return  salarioPersona
}

function subTransExp (pDiasTrabajados,pValorDia) {
    let salarioMinimo = 1600000
    let salarioTrans = salarioExp (pDiasTrabajados,pValorDia)
    let subTransporte

    if (salarioTrans<=2*salarioMinimo) {
        subTransporte = 162000
    }
    else{
        subTransporte = 0
    }
    
    return subTransporte
}

function saludExp (pDiasTrabajados,pValorDia){
    let pagoSalud
    pagoSalud = salarioExp(pDiasTrabajados,pValorDia) * 0.12

    return pagoSalud
}

function pensionExp(pDiasTrabajados,pValorDia){
    let pagoPension
    pagoPension =salarioExp(pDiasTrabajados,pValorDia) * 0.16

    return pagoPension
}

function arlExp(pDiasTrabajados,pValorDia){
    let pagoArl 
    pagoArl = salarioExp(pDiasTrabajados,pValorDia) * 0.052

    return pagoArl
}

function retencionExp(pDiasTrabajados,pValorDia){
    let reten
    let salarioMinimo = 1600000
    reten = salarioExp(pDiasTrabajados,pValorDia)

    if (reten>4*salarioMinimo) {
        descuento = reten * 0.04
    }
    else{
        descuento = 0
    }

    return descuento
}

function deducionesExp (pDiasTrabajados,pValorDia){
    let descuentos
    descuentos = saludExp(pDiasTrabajados,pValorDia) + pensionExp(pDiasTrabajados,pValorDia) + arlExp(pDiasTrabajados,pValorDia) + retencionExp(pDiasTrabajados,pValorDia)

    return descuentos
}

function pagoFinalExp(pDiasTrabajados,pValorDia){
    let pagoTotal
    pagoTotal= salarioExp(pDiasTrabajados,pValorDia) - deducionesExp(pDiasTrabajados,pValorDia) 

    return pagoTotal
}