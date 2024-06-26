/*
function contar(pnumero) {
    let numero = pnumero
    let contador = 1;
    let resultadoContar="";

    while(contador<=numero){
        
        resultadoContar+=contador;
        contador=contador+1
    }
    return resultadoContar;
}

const contarExp = function(pnumero) {
    let numero = pnumero
    let contador = 1;
    let resultadoContar="";

    while(contador<=numero){
        
        resultadoContar+=contador;
        contador=contador+1
    }
    return resultadoContar;
}
*/
function contar(pnumero) {
    let contador
    let numero=pnumero
    let resultadoContar = ""
    
    for(contador=1; contador<=numero; contador++){
        resultadoContar+=contador
    }
    return resultadoContar
}

const contarExp=function(pnumero) {
    let contador
    let numero=pnumero
    let resultadoContar = ""
    
    
    for(contador=1; contador<=numero; contador++){
        resultadoContar+=contador
        
    }
    return resultadoContar
    
}