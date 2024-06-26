

let numeroUno
let numeroDos


const restaExp=function(pnumeroUno,pnumeroDos){ // expresion
    let restar;
    numeroUno = pnumeroUno;
    numeroDos = pnumeroDos;

    restar = pnumeroUno - pnumeroDos;
    return restar;
}
const multiplicacionExp=function(pnumeroUno,pnumeroDos){
    let multiplicar;
    numeroUno = pnumeroUno;
    numeroDos = pnumeroDos;

    multiplicar = pnumeroUno * pnumeroDos;
    return multiplicar;
}
const divisionExp=function(pnumeroUno,pnumeroDos){
    let dividor;
    numeroUno = pnumeroUno;
    numeroDos = pnumeroDos;

    dividor = pnumeroUno / pnumeroDos;
    return dividor;
}
const operacionExp = function(poperador,pnumeroUno,pnumeroDos){
    let operador = poperador;
    numeroUno = pnumeroUno;
    numeroDos = pnumeroDos;
     if (operador == "resta") {
        operacionResultado = restaExp(pnumeroUno,pnumeroDos);
     }else if (operador == "multiplicacion") {
        operacionResultado = multiplicacionExp(pnumeroUno,pnumeroDos);
     }else if (operador == "division") {
        operacionResultado = divisionExp(pnumeroUno,pnumeroDos);
     }else{
        operacionResultado = "Error!!! no se puede operar";
     }
     return operacionResultado;
}

function resta(pnumeroUno,pnumeroDos){ // parametros
   let restar;
   numeroUno = pnumeroUno;
   numeroDos = pnumeroDos;

   restar = pnumeroUno - pnumeroDos;
   return restar;
}
function multiplicacion(pnumeroUno,pnumeroDos){
   let multiplicar;
   numeroUno = pnumeroUno;
   numeroDos = pnumeroDos;

   multiplicar = pnumeroUno * pnumeroDos;
   return multiplicar;
}
function division(pnumeroUno,pnumeroDos){
   let dividor;
   numeroUno = pnumeroUno;
   numeroDos = pnumeroDos;

   dividor = pnumeroUno / pnumeroDos;
   return dividor;
}
function operacion(poperador,pnumeroUno,pnumeroDos){
   let operador = poperador;
   numeroUno = pnumeroUno;
   numeroDos = pnumeroDos;
    if (operador == "resta") {
       operacionResultado = resta(pnumeroUno,pnumeroDos);
    }else if (operador == "multiplicacion") {
       operacionResultado = multiplicacion(pnumeroUno,pnumeroDos);
    }else if (operador == "division") {
       operacionResultado = division(pnumeroUno,pnumeroDos);
    }else{
       operacionResultado = "Error!!! no se puede operar";
    }
    return operacionResultado;
}