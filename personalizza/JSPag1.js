var idMotoreCorrente = 1;
var idPacchettoCorrente = 1;
var prezzoIniziale = 69000;
var imgElement = document.getElementById("fotoM");


function passaElementoSuccessivoM() {
  if (idMotoreCorrente < 4) {
    resetPrezzo();
    // Richiesta AJAX per ottenere i dati del prossimo elemento
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("informazioni").innerHTML = "<b>Cilindrata:</b> " + data.cilindrata + "<br><b>Carburante:</b> " + data.carburante + "<br><b>Prezzo: €</b> " + data.prezzo + "<br><b>Trasmissione:</b> " + data.trasmissione + "<br><b>Trazione:</b> " + data.trazione;
        var prezzoMotore = parseInt(data.prezzo);
        prezzoIniziale += prezzoMotore;
        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
      }
    };
    //invio la richiesta ajax alla pagina php con l'id del motore per stamparlo correttamente
    xhttp.open("GET", "InfoMotore.php?id=" + idMotoreCorrente, true);
    xhttp.send();

    fotoMotore();

    idMotoreCorrente++;
  }
  else{
    alert("Non ci sono elementi successivi!");
  }
}

function passaElementoPrecedenteM() {
  if (idMotoreCorrente > 1) {
    resetPrezzo();
    idMotoreCorrente--;

    // Richiesta AJAX per ottenere i dati dell'elemento precedente
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("informazioni").innerHTML = "<b>Cilindrata:</b> " + data.cilindrata + "<br><b>Carburante:</b> " + data.carburante + "<br><b>Prezzo: €</b> " + data.prezzo + "<br><b>Trasmissione:</b> " + data.trasmissione + "<br><b>Trazione:</b> " + data.trazione;
        var prezzoMotore = parseInt(data.prezzo);
        prezzoIniziale += prezzoMotore;
        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
      }
    };
    xhttp.open("GET", "InfoMotore.php?id=" + idMotoreCorrente, true);
    xhttp.send();

    fotoMotore();

  } else {
    alert("Non ci sono elementi precedenti!");
  }
}

function fotoMotore(){
  if(idMotoreCorrente == 1){
    fotoM.src = "./assets/fotoMotore1.png";
  } else if (idMotoreCorrente == 2) {
    fotoM.src = "./assets/fotoMotore2.png";
  } else if (idMotoreCorrente == 3) {
    fotoM.src = "./assets/fotoMotore3.png";
  }
}

function passaElementoSuccessivoP() {
  if (idPacchettoCorrente < 4) {
    resetPrezzo();
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("informazioni2").style.textAlign="left";
        document.getElementById("informazioni2").innerHTML = "<b>Nome:</b> " + data.NomePacchetto + "<br><b>Prezzo: €</b> " + data.Prezzo + "<br><b>Descrizione:</b> " + data.descrizione; 
        var prezzoPacchetto = parseInt(data.Prezzo);
        prezzoIniziale += prezzoPacchetto;

        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
      }
    };
    xhttp.open("GET", "InfoPacchetto.php?id=" + idPacchettoCorrente, true);
    xhttp.send();

    idPacchettoCorrente++;
  }
  else{
    alert("Non ci sono elementi successivi!");
  }
}

function passaElementoPrecedenteP() {

  if (idPacchettoCorrente > 1) {
    resetPrezzo();
    idPacchettoCorrente--;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("informazioni2").innerHTML = "<b>Nome:</b> " + data.NomePacchetto + "<br><b>Prezzo: €</b> " + data.Prezzo + "<br><b>Descrizione:</b> " + data.descrizione; 
        var prezzoPacchetto = parseInt(data.Prezzo);
        prezzoIniziale += prezzoPacchetto;

        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
      }
    };
    xhttp.open("GET", "InfoPacchetto.php?id=" + idPacchettoCorrente, true);
    xhttp.send();
  } else {
    alert("Non ci sono elementi precedenti!");
  }
}

function resetPrezzo() {
    prezzoIniziale = 69000;

    document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoIniziale.toLocaleString();
}

//funzione al submit del form per inviare il prezzo aggiornato 
document.addEventListener("DOMContentLoaded", function() {
  var form = document.getElementById("pag1");

  form.addEventListener("submit", function(event) {
    var prezzo = document.getElementById("price-69-000-HYi-sub-1").innerText.trim();
    var prezzoHiddenInput = document.getElementById("prezzo");
    prezzoHiddenInput.value = prezzo;
  });
});

function salvaIDM(){
  var idM = document.getElementById("idM");
  idM.value = idMotoreCorrente - 1;
  var idP = document.getElementById("idP");
  idP.value = 0;
}

function salvaIDP(){
  var idP = document.getElementById("idP");
  idP.value = idPacchettoCorrente - 1;
  var idM = document.getElementById("idM");
  idM.value = 0;
}