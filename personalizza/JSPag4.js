function esterni(){     //da sistemare in base agli interni scelti
    var foto = document.getElementById("macchina");
    if (foto.src.includes("./assets/foto1-4.png")) {
        foto.src = "./assets/internineri2.png";
        foto.style.width="53%";
        foto.style.height="65%";
        foto.style.top="9.5rem";
        foto.style.left="1%";
        foto.style.right="0";
    } else {
        foto.src = "./assets/foto1-4.png";
        foto.style.width="60%";
        foto.style.height="41.3rem";
        foto.style.top="28%";
        foto.style.left="0%";
        foto.style.right="44%";
    }
}
function interni(){
    var foto = document.getElementById("macchina");
    if (foto.src.includes("./assets/internineri2.png")) {
        foto.src = "./assets/foto1-4.png";
        foto.style.width="60%";
        foto.style.height="41.3rem";
        foto.style.top="28%";        
        foto.style.left="0";        
        foto.style.right="44%";

    } else {
        foto.src = "./assets/internineri2.png";
        foto.style.width="53%";
        foto.style.height="65%";
        foto.style.top="9.5rem";
        foto.style.left="1%";
        foto.style.right="0";
    }
}

//richiesta ajax per ottenere i dati del motore salvato nella sessione
function datiMotore(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("NomeMotore").innerHTML += data.IdMotore;
        document.getElementById("CostoMotore").innerHTML = "€ " + data.prezzo;
      }
    };
    xhttp.open("POST", "pag4.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("idM=" + id);
}

function datiPacchetto(id){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.responseText);
      document.getElementById("infoPacchetto").innerHTML = "<b>Nome:</b> " + data.NomePacchetto  + "<br><b>Descrizione:</b> " + data.descrizione + "<br><b>Prezzo:</b> " + data.Prezzo; 
    }
  };
  xhttp.open("POST", "pag4.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("idP=" + id);
}

function datiColore(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("NomeColore").innerHTML += data.IdVerniciatura +", " + data.tipologia;
        document.getElementById("CostoColore").innerHTML = "€ " + data.prezzo;
      }
    };
    xhttp.open("POST", "pag4.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("idC=" + id);
}

function datiCerchi(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("NomeCerchi").innerHTML += data.IdOptionals;
        document.getElementById("CostoCerchi").innerHTML = "€ " + data.Prezzo;
      }
    };
    xhttp.open("POST", "pag4.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("cerchi=" + id);
}

function datiDettagli(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("NomeDettagli").innerHTML += data.IdOptionals;
        document.getElementById("CostoDettagli").innerHTML = "€ " + data.Prezzo;
      }
    };
    xhttp.open("POST", "pag4.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("dettagli=" + id);
}

function datiInterni(id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("NomeInterni").innerHTML += data.IdOptionals;
        document.getElementById("CostoInterni").innerHTML = "€ " + data.Prezzo;
      }
    };
    xhttp.open("POST", "pag4.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("pelle=" + id);
}