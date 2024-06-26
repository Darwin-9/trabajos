/*
function tabla(pmultiplicar,pnumero){
    let multiplicar = pmultiplicar
    let numero = pnumero
    let result

    while(multiplicar<numero){
        multiplicar = multiplicar + 1
        result = multiplicar * numero
        console.log(numero +"x"+ multiplicar +"="+ result);
    }
    return "Final"
}

const tablaExp = function(pmultiplicar,pnumero){
    let multiplicar = pmultiplicar
    let numero = pnumero
    let result

    while(multiplicar<numero){
        multiplicar = multiplicar + 1
        result = multiplicar * numero
        console.log(numero +"x"+ multiplicar +"="+ result);
    }
    return "Final"
}
*/

function tabla(pmultiplicar,pnumero){
    let multiplicar = pmultiplicar
    let numero = pnumero
    let result

    for(multiplicar = 1; multiplicar<=numero; multiplicar++){
        result = multiplicar * numero
        console.log(numero +"x"+ multiplicar +"="+ result)
    }
    return "Final"
}

const tablaExp = function(pmultiplicar,pnumero){
    let multiplicar = pmultiplicar
    let numero = pnumero
    let result

    for(multiplicar = 1; multiplicar<=numero; multiplicar++){
        result = multiplicar * numero
        console.log(numero +"x"+ multiplicar +"="+ result)
    }
    return "Final"
}