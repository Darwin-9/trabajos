/*
function tabla(pmultiplicar,pnumero){// parametros
    let multiplicar = pmultiplicar
    let numero = pnumero
    let result

    while(multiplicar<numero){
        multiplicar ++
        result = multiplicar * numero
        console.log(numero +"x"+ multiplicar +"="+ result)
        if(result%2==0){
            console.log("E Par")
        }
        else{
            console.log("Es Impar")
        }
    }
    return "Fin"
}

const tablaExp = function(pmultiplicar,pnumero){ // expresion
    let multiplicar = pmultiplicar
    let numero = pnumero
    let result

    while(multiplicar<numero){
        multiplicar ++
        result = multiplicar * numero
        console.log(numero +"x"+ multiplicar +"="+ result)
        if(result%2==0){
            console.log("Es Par")
        }
        else{
            console.log("Es Impar")
        }
    }
    return "Fin"
}

*/

function tabla(pmultiplicar,pnumero){// parametros
    let multiplicar = pmultiplicar
    let numero = pnumero
    let result

    for(multiplicar= 1; multiplicar <=numero; multiplicar++){
        result = multiplicar * numero
        console.log(numero +"x"+ multiplicar +"="+ result)
        if(result%2==0){
            console.log("Es Par")
        }
        else{
            console.log("Es Impar")
        }
    }
    return "Fin"
}

const tablaExp = function(pmultiplicar,pnumero){// parametros
    let multiplicar = pmultiplicar
    let numero = pnumero
    let result

    for(multiplicar= 1; multiplicar <=numero; multiplicar++){
        result = multiplicar * numero
        console.log(numero +"x"+ multiplicar +"="+ result)
        if(result%2==0){
            console.log("Es Par")
        }
        else{
            console.log("Es Impar")
        }
    }
    return "Fin"
}

