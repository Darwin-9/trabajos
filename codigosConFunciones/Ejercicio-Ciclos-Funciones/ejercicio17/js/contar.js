/*
function contar(pnumero) {
    let numero = pnumero
    let contador = 1;
    let resultadoContar="";

    while(contador<=numero){
        
        resultadoContar+=contador;
        contador=contador+1

        if(contador%2==0){
            resultadoContar = numero + " Es par"
        }
        else{
            resultadoContar = numero + " Es impar"
        }
    }
    return resultadoContar;
}

/*function par(pnumero) {
    let numeros = contar(pnumero)


    if(numeros%2==0){
        resultado = numero + " Es par"
    }
    else{
        resultado = numero + " Es impar"
    }

    return resultado
}*/

/*
function conta(contando) {
    let contar=contando;
    let numero=4;
    while (contar<=numero) {
        contar++
        if (contar%2==0) {
            console.log(contar+" Es par");
        } else {
            console.log(contar+" Es impar");
        }
    }
    return "Fin"
}

const contaExp = function(contando) {
    let contar=contando;
    let numero=4;
    while (contar<=numero) {
        contar++
        if (contar%2==0) {
            console.log(contar+" Es par");
        } else {
            console.log(contar+" Es impar");
        }
    }
    return "Fin"
}

*/

function conta(contando){ // prametros
    let contar=contando;
    let numero=5;
    for (contar=1; contar<=numero; contar++) {
        if (contar%2==0) {
            console.log(contar+" Es par");
        } else {
            console.log(contar+" Es impar");
        }
    }
    return "Fin"
}

const contaExp = function(contando){//expresion
    let contar=contando;
    let numero=5;
    for (contar=1; contar<=numero; contar++) {
        if (contar%2==0) {
            console.log(contar+" Es par");
        } else {
            console.log(contar+" Es impar");
        }
    }
    return "Fin"
}
