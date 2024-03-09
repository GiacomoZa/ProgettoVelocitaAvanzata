// Variabile globale per tenere traccia dell'ID corrente
var idMotoreCorrente = 1;
var idPacchettoCorrente = 1;
var prezzoIniziale = 69000;

function passaElementoSuccessivoM() {
  if (idMotoreCorrente < 4) {
    resetPrezzo();
    // Richiesta AJAX per ottenere i dati del prossimo elemento
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Ricevi la risposta JSON
        var data = JSON.parse(this.responseText);
        // Visualizza le informazioni
        document.getElementById("informazioni").innerHTML = "<b>Cilindrata:</b> " + data.cilindrata + "<br><b>Carburante:</b> " + data.carburante + "<br><b>Prezzo:</b> " + data.prezzo + "<br><b>Trasmissione:</b> " + data.trasmissione + "<br><b>Trazione:</b> " + data.trazione;
        var prezzoMotore = parseInt(data.prezzo);
        prezzoIniziale += prezzoMotore;
        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
      }
    };
    // Effettua la richiesta GET per ottenere il prossimo elemento
    xhttp.open("GET", "InfoMotore.php?id=" + idMotoreCorrente, true);
    xhttp.send();

    // Incrementa l'ID corrente per il prossimo elemento
    idMotoreCorrente++;

    // Aggiorna il prezzo visualizzato sulla pagina
  }
  else{
    alert("Non ci sono elementi successivi!");
  }
}

function passaElementoPrecedenteM() {
  // Controlla se l'ID corrente è maggiore di 1 per evitare id negativi
  if (idMotoreCorrente > 1) {
    resetPrezzo();
    // Riduci l'ID corrente per ottenere l'elemento precedente
    idMotoreCorrente--;

    // Richiesta AJAX per ottenere i dati dell'elemento precedente
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Ricevi la risposta JSON
        var data = JSON.parse(this.responseText);
        // Visualizza le informazioni
        document.getElementById("informazioni").innerHTML = "<b>Cilindrata:</b> " + data.cilindrata + "<br><b>Carburante:</b> " + data.carburante + "<br><b>Prezzo:</b> " + data.prezzo + "<br><b>Trasmissione:</b> " + data.trasmissione + "<br><b>Trazione:</b> " + data.trazione;
        var prezzoMotore = parseInt(data.prezzo);
        prezzoIniziale += prezzoMotore;
        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
      }
    };
    // Effettua la richiesta GET per ottenere l'elemento precedente
    xhttp.open("GET", "InfoMotore.php?id=" + idMotoreCorrente, true);
    xhttp.send();

    // Aggiorna il prezzo visualizzato sulla pagina
  } else {
    alert("Non ci sono elementi precedenti!");
  }
}

function passaElementoSuccessivoP() {
  if (idPacchettoCorrente < 4) {
    resetPrezzo();
    // Richiesta AJAX per ottenere i dati del prossimo elemento
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Ricevi la risposta JSON
        var data = JSON.parse(this.responseText);
        // Visualizza le informazioni
        document.getElementById("informazioni2").innerHTML = "<b>Nome:</b> " + data.NomePacchetto + "<br><b>Prezzo:</b> " + data.Prezzo + "<br><b>Descrizione:</b> " + data.descrizione; 
        var prezzoPacchetto = parseInt(data.Prezzo);
        prezzoIniziale += prezzoPacchetto;

        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
      }
    };
    // Effettua la richiesta GET per ottenere il prossimo elemento
    xhttp.open("GET", "InfoPacchetto.php?id=" + idPacchettoCorrente, true);
    xhttp.send();

    // Incrementa l'ID corrente per il prossimo elemento
    idPacchettoCorrente++;
  }
  else{
    alert("Non ci sono elementi successivi!");
  }
}

function passaElementoPrecedenteP() {

  // Controlla se l'ID corrente è maggiore di 1 per evitare id negativi
  if (idPacchettoCorrente > 1) {
    resetPrezzo();
    // Riduci l'ID corrente per ottenere l'elemento precedente
    idPacchettoCorrente--;

    // Richiesta AJAX per ottenere i dati dell'elemento precedente
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Ricevi la risposta JSON
        var data = JSON.parse(this.responseText);
        // Visualizza le informazioni
        document.getElementById("informazioni2").innerHTML = "<b>Nome:</b> " + data.NomePacchetto + "<br><b>Prezzo:</b> " + data.Prezzo + "<br><b>Descrizione:</b> " + data.descrizione; 
        var prezzoPacchetto = parseInt(data.Prezzo);
        prezzoIniziale += prezzoPacchetto;

        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
      }
    };
    // Effettua la richiesta GET per ottenere l'elemento precedente
    xhttp.open("GET", "InfoPacchetto.php?id=" + idPacchettoCorrente, true);
    xhttp.send();
  } else {
    alert("Non ci sono elementi precedenti!");
  }
}

function resetPrezzo() {
    // Riporta il prezzo al valore iniziale
    prezzoIniziale = 69000;

    // Aggiorna il prezzo visualizzato sulla pagina
    document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
}

document.addEventListener("DOMContentLoaded", function() {
  var form = document.getElementById("pag1");

  form.addEventListener("submit", function(event) {
    var prezzo = document.getElementById("price-69-000-HYi-sub-1").innerText.trim();
    var prezzoHiddenInput = document.getElementById("prezzo");
    prezzoHiddenInput.value = prezzo;
  });
});

function salvaIDM(){
  var id = document.getElementById("idMP");
  id.value = idMotoreCorrente;
}

function salvaIDP(){
  var id = document.getElementById("idMP");
  id.value = idPacchettoCorrente;
}