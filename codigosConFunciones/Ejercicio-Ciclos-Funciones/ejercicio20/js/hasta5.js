/*
function tablas9(ptabla1,ptabla2,plimit1,plimit2,ptablaPar,ptablaImpar){
    let tabla1 = ptabla1 
    let tabla2 = ptabla2
    let limit1 = plimit1
    let limit2 = plimit2
    let tablaPar = ptablaPar
    let tablaImpar = ptablaImpar

    tabla1 = 0

    while(tabla1<limit1){
        tabla1 ++
        tabla2 = 0
        while(tabla2<limit2){
            tabla2++
            result = tabla1 * tabla2

            console.log(tabla1 +"x"+ tabla2 +"="+ result)

            if(result%2==0){
                console.log("Buzz")
                tablaPar = tablaPar + 1
            }
            else{
                console.log("Bass")
                tablaImpar = tablaImpar + 1
            }
        }  
    }
    return "Pares: " + tablaPar + " Impar: "+ tablaImpar +"\n"+ "Final"
}

const tablas9Exp = function(ptabla1,ptabla2,plimit1,plimit2,ptablaPar,ptablaImpar){
    let tabla1 = ptabla1 
    let tabla2 = ptabla2
    let limit1 = plimit1
    let limit2 = plimit2
    let tablaPar = ptablaPar
    let tablaImpar = ptablaImpar

    tabla1 = 0

    while(tabla1<limit1){
        tabla1 ++
        tabla2 = 0
        while(tabla2<limit2){
            tabla2++
            result = tabla1 * tabla2

            console.log(tabla1 +"x"+ tabla2 +"="+ result)

            if(result%2==0){
                console.log("Buzz")
                tablaPar = tablaPar + 1
            }
            else{
                console.log("Bass")
                tablaImpar = tablaImpar + 1
            }
        }  
    }
    return "Pares: " + tablaPar + " Impar: "+ tablaImpar +"\n"+ "Final" 
}
*/
function tablas9(ptabla1,ptabla2,plimit1,plimit2,ptablaPar,ptablaImpar){
    let tabla1 = ptabla1 
    let tabla2 = ptabla2
    let limit1 = plimit1
    let limit2 = plimit2
    let tablaPar = ptablaPar
    let tablaImpar = ptablaImpar

    for(tabla1=1; tabla1<=limit1; tabla1++){

        for(tabla2=1; tabla2<=limit2; tabla2++){
            result = tabla1 * tabla2
            console.log(tabla1 +"x"+ tabla2 +"="+ result)

            if(result%2==0){
                console.log("Buzz")
                tablaPar = tablaPar + 1
            }
            else{
                console.log("Bass")
                tablaImpar = tablaImpar + 1
            }
        }
    }
    return "Pares: " + tablaPar + " Impar: "+ tablaImpar +"\n"+ "Final"
}

const tablas9Exp = function(ptabla1,ptabla2,plimit1,plimit2,ptablaPar,ptablaImpar){
    let tabla1 = ptabla1 
    let tabla2 = ptabla2
    let limit1 = plimit1
    let limit2 = plimit2
    let tablaPar = ptablaPar
    let tablaImpar = ptablaImpar

    for(tabla1=1; tabla1<=limit1; tabla1++){

        for(tabla2=1; tabla2<=limit2; tabla2++){
            result = tabla1 * tabla2
            console.log(tabla1 +"x"+ tabla2 +"="+ result)

            if(result%2==0){
                console.log("Buzz")
                tablaPar = tablaPar + 1
            }
            else{
                console.log("Bass")
                tablaImpar = tablaImpar + 1
            }
        }
    }
    return "Pares: " + tablaPar + " Impar: "+ tablaImpar +"\n"+ "Final"
}

