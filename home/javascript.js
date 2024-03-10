function scorri(sezione) {
    var sottotitolo = document.getElementById(sezione);
    sottotitolo.scrollIntoView({ behavior: 'smooth'});
}

function Redirect(percorso){
    window.location.href = percorso;
}

document.getElementById("submitButton").addEventListener("click", function(event) {
    event.preventDefault(); // Evita l'invio del modulo predefinito

    // Ottieni i dati del modulo
    var formData = new FormData(document.getElementById("login"));

    // Invia i dati al tuo script PHP tramite AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Gestisci la risposta del tuo script PHP se necessario
                console.log(xhr.responseText);
            } else {
                // Gestisci eventuali errori di invio
                console.error('Si è verificato un errore durante l\'invio dei dati.');
            }
        }
    };
    xhr.send(formData);
});

