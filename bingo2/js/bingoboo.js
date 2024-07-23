// Obtén todas las cajas dentro de gri-bin que siguen a las primeras cinco cajas con texto
const cajasNumeros = document.querySelectorAll('.gri-bin .caja:not(:nth-child(-n+5))');

// Itera sobre cada caja para generar números aleatorios
cajasNumeros.forEach(caja => {
    // Genera un número aleatorio entre 1 y 100 (puedes ajustar según tus necesidades)
    const numeroAleatorio = Math.floor(Math.random() * 75) + 1;

    // Asigna el número aleatorio como contenido de la caja
    caja.textContent = numeroAleatorio;
});




