let synthesis = window.speechSynthesis;
let currentSpeech;

function leerContenido() {
    const contenedor = document.getElementById('contenido-lector');
    if (contenedor) {
        const texto = contenedor.innerText;
        if (currentSpeech) synthesis.cancel(); // Cancela lectura previa

        currentSpeech = new SpeechSynthesisUtterance(texto);
        currentSpeech.lang = 'es-ES';
        currentSpeech.rate = 1.2;
        currentSpeech.pitch = 1;
        synthesis.speak(currentSpeech);
    } else {
        console.error('No se encontró el contenedor especificado.');
    }
}

function pausarLectura() {
    if (synthesis.speaking) synthesis.pause();
}

function reanudarLectura() {
    if (synthesis.paused) synthesis.resume();
}

// Detectar combinaciones de teclado
document.addEventListener('keydown', (event) => {
    if (event.altKey && event.key === 'a') {
        event.preventDefault();
        leerContenido();
    } else if (event.altKey && event.key === 'p') {
        event.preventDefault();
        pausarLectura();
    } else if (event.altKey && event.key === 'w') {
        event.preventDefault();
        reanudarLectura();
    }
});

if (!('speechSynthesis' in window)) {
    console.error('La API de síntesis de voz no está soportada en este navegador.');
}
// Detener la síntesis de voz al cambiar de vista
window.addEventListener('beforeunload', () => {
    window.speechSynthesis.cancel(); // Detiene cualquier audio en curso
});

document.querySelectorAll('#contactForm input, #contactForm textarea').forEach(input => {
    input.addEventListener('blur', () => {  // Cuando el campo pierde el foco
        if (input.value.trim() === '') {
            const missingText = `${input.previousElementSibling ? input.previousElementSibling.innerText : input.placeholder} está vacío. Por favor, complételo.`;
            const speech = new SpeechSynthesisUtterance(missingText);
            speech.lang = 'es-ES';
            speech.rate = 1.3;
            speech.pitch = 1;
            window.speechSynthesis.speak(speech);
        }
    });
});

