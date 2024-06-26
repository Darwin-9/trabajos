function areas(operador,pbase, paltura,plado ){ // parametros
    let area
    if (operador=="rectangulo") {
        area = pbase*paltura
    }else if(operador=="triangulo"){
        area = (pbase*paltura)/2
    }
    else if(operador=="cuadrado"){
        area = plado*plado
    }else{
        area ="Error!!! no se puede operar"
    }
        return area 
}

const areasExp = function(operador,pbase, paltura,plado ){ // expresion
    let area
    if (operador=="rectangulo") {
        area = pbase*paltura
    }else if(operador=="triangulo"){
        area = (pbase*paltura)/2
    }
    else if(operador=="cuadrado"){
        area = plado*plado
    }else{
        area ="Error!!! no se puede operar"
    }
        return area 
}

