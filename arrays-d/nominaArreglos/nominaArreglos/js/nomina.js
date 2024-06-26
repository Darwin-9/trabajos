/**
 * Nomina
 * Autor: Andres Morales
 * Fecha: 02/05/2024
 */
function salarioPer(pvalorDia,pdiasTrabajados){        
    let valorDia = pvalorDia
    let diasTrabajados = pdiasTrabajados
    let sueldoPe
    sueldoPe = valorDia * diasTrabajados
    return sueldoPe
}

function saludPer(sueldoPe){
    let salario = sueldoPe
    let saludPe
    saludPe = salario * 0.12
    return saludPe
}

function pensionPer(sueldoPe){
    let salario = sueldoPe
    let pensionPe
    pensionPe = salario * 0.16;
    return pensionPe
}

function arlPer(sueldoPe){
    let salario = sueldoPe
    let arlPe
    arlPe = salario * 0.052
    return arlPe
}

function retencionPer(sueldoPe){
    let salario = sueldoPe
    let retencionPe

    if(salario > 13200000){
        retencionPe = salario * 0.08
    }
    else if(salario > 9200000 && sueldoPe <= 13200000){
        retencionPe = salario * 0.04
    }
    else if(salario > 6900000 && sueldoPe <= 9200000){
        retencionPe = salario * 0.02
    }
    else{
        retencionPe = 0
    }
    return retencionPe
}

function subTransportePer(sueldoPe){
    let salario = sueldoPe
    let subTransporte

    if(salario < 2300000){
        subTransporte = 120000
    }
    else{
        subTransporte = 0
    }
    return subTransporte
}

function totalPagarPer(sueldoPe, psalud, ppension, parl, psubTransporte, pretencion){
    let salario = sueldoPe
    let saludPe  = psalud
    let pensionPe = ppension
    let arlPe = parl
    let subTransporte = psubTransporte
    let retencionPe = pretencion
    let totalPagarPe
    totalPagarPe = salario + subTransporte - (saludPe + pensionPe + arlPe + retencionPe)
    return totalPagarPe
}


