function scorri(sezione) {
    var sottotitolo = document.getElementById(sezione);
    sottotitolo.scrollIntoView({ behavior: 'smooth'});
}

function Redirect(percorso){
    window.location.href = percorso;
}

document.getElementById("submitButton").addEventListener("click", function(event) {
    event.preventDefault(); // Evita l'invio del modulo predefinito

   
    var formData = new FormData(document.getElementById("login")); // ottiene i dati

   
    var xhr = new XMLHttpRequest(); // Crea una nuova richiesta XMLHttpRequest

    xhr.open("POST", "login.php", true); // Imposta la richiesta asincrona come POST e imposta lo script di destinazione

    xhr.onreadystatechange = function() { // Funzione da eseguire ogni volta che lo stato della richiesta cambia
        if (xhr.readyState === XMLHttpRequest.DONE) { // Controlla se la richiesta è stata fatta
            if (xhr.status === 200) {  
                console.log(xhr.responseText);
            } else {
                console.error('Si è verificato un errore durante l\'invio dei dati.');
            }
        }
    };
    xhr.send(formData); // invia i dati del modulo tramite ajax
});

function validateForm() {
    var username = document.forms["login"]["user"].value;
    var password = document.forms["login"]["psw"].value;
    if (username == "" || password == "") {
      alert("Compila entrambi i campi del login");
      return false;
    }
  }
