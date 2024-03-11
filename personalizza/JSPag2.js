
//funzione per l'aggiornamento dell'immagine in base alla selezione dell'utente
document.addEventListener("DOMContentLoaded", function() {
    var image3 = document.getElementById("PWhite");
    var image1 = document.getElementById("MBlu");
    var image2 = document.getElementById("MBlack");    
    var image4 = document.getElementById("MRed");
    var idColore = document.getElementById("coloreSelezionato");

    var c1 = document.getElementById("cerchio1");
    var c2 = document.getElementById("cerchio2");
    var idCerchio = document.getElementById("cerchioSelezionato");

    var foto = document.getElementById("macchina");

    var prezzoS = document.getElementById("prezzo").value.trim();   
    prezzoS = prezzoS.replace(/[^0-9]/g, "");       
    var prezzo = parseInt(prezzoS);
    var prezzoCorrente = prezzo;
    var prezzoColore = 0;
    var prezzoCerchio = 0;

    image1.addEventListener("click", function() {
        foto.src="./assets/macchinaBlu.png";
        image1.style.border="2px solid red"
        image4.style.border="none"
        image2.style.border="none"
        image3.style.border="none"
        idColore.value = 2;
        prezzoColore = 800;
        aggiornaPrezzo();
    });

    image2.addEventListener("click", function() {
        foto.src="./assets/macchinaNera.png";
        image2.style.border="2px solid red"
        image1.style.border="none"
        image4.style.border="none"
        image3.style.border="none"
        idColore.value = 3;
        prezzoColore = 800;
        aggiornaPrezzo();
    });

    image3.addEventListener("click", function() {
        foto.src="./assets/macchinaBianca.png";
        image3.style.border="2px solid red"
        image1.style.border="none"
        image2.style.border="none"
        image4.style.border="none"
        idColore.value = 4;
        prezzoColore = 3000;
        aggiornaPrezzo();
    });

    image4.addEventListener("click", function() {
        foto.src="./assets/foto1-4.png";
        image4.style.border="2px solid red"
        image1.style.border="none"
        image2.style.border="none"
        image3.style.border="none"
        idColore.value = 1;
        prezzoColore = 0;
        aggiornaPrezzo();
    });

    c1.addEventListener("click", function() {
        c1.style.border="2px solid red"
        c2.style.border="none"
        idCerchio.value = 3;
        prezzoCerchio = 400;
        aggiornaPrezzo();
    });
    c2.addEventListener("click", function() {
        c2.style.border="2px solid red"
        c1.style.border="none"
        idCerchio.value = 4;
        prezzoCerchio = 1600;
        aggiornaPrezzo();
    });

    function aggiornaPrezzo() {
        prezzoCorrente = prezzo + prezzoColore + prezzoCerchio;
        document.querySelector(".price-69-000-HYi-sub-1").innerHTML = "€" + prezzoCorrente.toLocaleString();
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("formData");
  
    form.addEventListener("submit", function(event) {
      var prezzo = document.getElementById("price-69-000-HYi-sub-1").innerText.trim();
      var prezzoHiddenInput = document.getElementById("prezzo2");
      prezzoHiddenInput.value = prezzo;
    });
});

function esterni(){
    var foto = document.getElementById("macchina");
    if (foto.src.includes("./assets/foto1-4.png")) {
        foto.src = "./assets/internineri2.png";
        foto.style.width="60%";
        foto.style.right="45%";
        foto.style.top="25%";
    } else {
        foto.src = "./assets/foto1-4.png";
        foto.style.width="60%";
        foto.style.right="44%";
        foto.style.top="25%";
    }
}

function interni(){
    var foto = document.getElementById("macchina");
    if (foto.src.includes("./assets/internineri2.png")) {
        foto.src = "./assets/foto1-4.png";
        foto.style.width="60%";
        foto.style.right="44%";
        foto.style.top="25%";
    } else {
        foto.src = "./assets/internineri2.png";
        foto.style.width="60%";
        foto.style.right="45%";
        foto.style.top="25%";
    }
}