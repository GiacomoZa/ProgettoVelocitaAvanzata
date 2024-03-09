function fetchImage(url, targetImage) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'arraybuffer';

    xhr.onload = function() {
        if (this.status == 200) {
            var blob = this.response;
            var reader = new FileReader();
            reader.onload = function() {
                targetImage.src = reader.result; // Imposta l'immagine di destinazione con l'URL restituito dall'API
            };
            reader.readAsDataURL(new Blob([blob])); // Converti il buffer in un URL Blob
        }
    };
    xhr.send();
}

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
        fetchImage("./assets/macchinaBlu.png", foto);
        idColore.value = 2;
        prezzoColore = 800;
        aggiornaPrezzo();
    });

    image2.addEventListener("click", function() {
        fetchImage("./assets/macchinaNera.png", foto);
        idColore.value = 3;
        prezzoColore = 800;
        aggiornaPrezzo();
    });

    image3.addEventListener("click", function() {
        fetchImage("./assets/macchinaBianca.png", foto);
        idColore.value = 4;
        prezzoColore = 3000;
        aggiornaPrezzo();
    });

    image4.addEventListener("click", function() {
        fetchImage("./assets/foto1-4.png", foto);
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