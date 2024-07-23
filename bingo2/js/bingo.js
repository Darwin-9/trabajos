window.onload = function() {
    // Seleccionar todos los divs con la clase numero-b
    let numeroB = document.querySelectorAll('.numero-b',);

    // Asignar un número aleatorio a cada div
    numeroB.forEach(function(div) {
        let randomNumber = Math.floor(Math.random() * 100) + 1;
        div.textContent = randomNumber;
    });

    let numeroI = document.querySelectorAll('.numero-i',);

    // Asignar un número aleatorio a cada div
    numeroI.forEach(function(div) {
        let randomNumber = Math.floor(Math.random() * 100) + 1;
        div.textContent = randomNumber;
    });

    let numeroN = document.querySelectorAll('.numero-n',);

    // Asignar un número aleatorio a cada div
    numeroN.forEach(function(div) {
        let randomNumber = Math.floor(Math.random() * 100) + 1;
        div.textContent = randomNumber;
    });

    let numeroG = document.querySelectorAll('.numero-g',);

    // Asignar un número aleatorio a cada div
    numeroG.forEach(function(div) {
        let randomNumber = Math.floor(Math.random() * 100) + 1;
        div.textContent = randomNumber;
    });

    let numeroO = document.querySelectorAll('.numero-o',);

    // Asignar un número aleatorio a cada div
    numeroO.forEach(function(div) {
        let randomNumber = Math.floor(Math.random() * 100) + 1;
        div.textContent = randomNumber;
    });



}