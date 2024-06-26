/*
function calcularEdad(anioNac) {
    let perso = anioNac
    let anioAct = 2024

    edadPer= anioAct-perso
    if (edadPer>=18) {
        resultado = ("La persona es mayor de edad")
    }
    else(
        resultado = ("La persona es menor de edad")
    )
    return  edadPer
}

//función para calcular el promedio de edades

function promedio(resultado,numeros){
    let resultadoOpera = resultado
    let divisor = numeros
    let promedio

    promedio = resultadoOpera / divisor

    if (promedio>=18) {
        resultado = "El promedio de edades estan en la mayoria de edad"
    }
    else{
        resultado = "El promedio de edades estan en la minoria de edad"
    }

    return resultado + promedio
}

const calcularEdad = function(anioNac) {
    let perso = anioNac
    let anioAct = 2024

    edadPer= anioAct-perso
    if (edadPer>=18) {
        resultado = ("La persona es mayor de edad")
    }
    else(
        resultado = ("La persona es menor de edad")
    )
    return  edadPer
}

const promedio  = function(resultado,numeros){
    let resultadoOpera = resultado
    let divisor = numeros
    let promedio

    promedio = resultadoOpera / divisor

    if (promedio>=18) {
        resultado = "El promedio de edades estan en la mayoria de edad"
    }
    else{
        resultado = "El promedio de edades estan en la minoria de edad"
    }

    return resultado + promedio
}
*/


let edad1;
let edad2;
let edad3;
let eda1;
let eda2;
let eda3;

function mayor(anionac1,anionac2,anionac3) {
    let aninac1=anionac1;
    let aninac2=anionac2;
    let aninac3=anionac3;
    let edad1;
    let edad2;
    let edad3;
    let promedio=anios(anionac1)+anios2(anionac2)+anios3(anionac3);
    let prom
    if (promedio>17) {
        prom="El promedio cumple con la mayoria de edad";
    } else {
       prom= "El promedio no comple con la mayoria de edad";
    }
    return prom
}
function anios(anionac1,) {
    let aninac1=anionac1;
    let edad1 = 2024-aninac1;
    if (edad1>17) {
        eda1 ="Es mayor de edad";
    } else{
        eda1="Es menor de edad";
    }
    console.log(eda1);
    return edad1
}
function anios2(anionac2,) {
    let aninac2=anionac2;
    let edad2 = 2024-aninac2;
    if (edad2>17) {
        eda2 ="Es mayor de edad";
    } else{
        eda2="Es menor de edad";
    }
    console.log(eda2);
    return edad2
}
function anios3(anionac3,) {
    let aninac3=anionac3;
    let edad3 = 2024-aninac3;
    if (edad3>17) {
        eda3 ="Es mayor de edad";
    } else{
        eda3="Es menor de edad";
    }
    console.log(eda3);
    return edad3
}

const mayor2=function(anionac1,anionac2,anionac3) {
    let aninac1=anionac1;
    let aninac2=anionac2;
    let aninac3=anionac3;
    let edad1;
    let edad2;
    let edad3;
    let promedio=anios4(anionac1)+anios5(anionac2)+anios6(anionac3);
    let prom
    if (promedio>17) {
        prom="El promedio cumple con la mayoria de edad";
    } else {
       prom= "El promedio no comple con la mayoria de edad";
    }
    return prom
}
const anios4=function(anionac4,) {
    let aninac4=anionac4;
    let edad4 = 2024-aninac4;
    let eda4;
    if (edad4>17) {
        eda4 ="Es mayor de edad";
    } else{
        eda4="Es menor de edad";
    }
    console.log(eda4);
    return edad4;
}
const anios5=function(anionac5,) {
    let aninac5=anionac5;
    let edad5 = 2024-aninac5;
    let eda5;
    if (edad5>17) {
        eda5 ="Es mayor de edad";
    } else{
        eda5="Es menor de edad";
    }
    console.log(eda5);
    return edad5
}
const anios6=function(anionac6,) {
    let aninac6=anionac6;
    let edad6 = 2024-aninac6;
    let eda6;
    if (edad6>17) {
        eda6 ="Es mayor de edad";
    } else{
        eda6="Es menor de edad";
    }
    console.log(eda6);
    return edad6;
}



