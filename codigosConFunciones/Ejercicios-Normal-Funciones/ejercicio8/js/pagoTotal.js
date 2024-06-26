function pagoPersona(valorDia, diasTrabajados) { // paramettros
    let sueldo
    let arl
    let salud
    let pension
    let descuentos
    let pagoTotal

    sueldo = valorDia * diasTrabajados
    salud= sueldo * 0.12
    pension = sueldo *0.16
    arl =sueldo * 0.052
    descuentos = salud+ pension+ arl
    pagoTotal= sueldo - descuentos

return [pagoTotal+" \n "+"El sueldo de la persona es: "+sueldo+" \n"+
        "EL descuento de salud es :"+salud+" \n"+"EL descuento de pension es :"+pension+" \n"+ 
    "EL descuento de arl es :"+arl+" \n"+"EL total de descuento es:"+descuentos]

}

const pagoPersonaExp = function(valorDia, diasTrabajados) { // expresion
    let sueldo
    let arl
    let salud
    let pension
    let descuentos
    let pagoTotal

    sueldo = valorDia* diasTrabajados
    salud= sueldo * 0.12
    pension = sueldo *0.16
    arl =sueldo * 0.052
    descuentos = salud+ pension+ arl
    pagoTotal= sueldo - descuentos

return [pagoTotal+" \n"+"El sueldo de la persona es: "+sueldo+" \n"+
        "EL descuento de salud es :"+salud+" \n"+"EL descuento de pension es :"+pension+" \n"+ 
    "EL descuento de arl es :"+arl+" \n"+"EL total de descuento es:"+descuentos]

}