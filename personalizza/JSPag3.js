document.addEventListener("DOMContentLoaded", function() {
    var image1 = document.getElementById("LBlack");
    var image2 = document.getElementById("LBrown");  
    var d1 = document.getElementById("dettagli1");
    var d2 = document.getElementById("dettagli2");

    var idPelle = document.getElementById("pelle"); 
    var idDettagli = document.getElementById("dettagli"); 

    var foto = document.getElementById("macchina");

    //salvataggio del prezzo della sessione, recuperandolo da un elemento html
    var prezzoS = document.getElementById("prezzo").value.trim();   
    prezzoS = prezzoS.replace(/[^0-9]/g, "");       
    var prezzo = parseInt(prezzoS);
    var prezzoCorrente = prezzo; 

    var prezzoInterni = 0;
    var prezzoDettagli = 0;

    image1.addEventListener("click", function() {
        foto.src="./assets/interniNeri.jpeg";
        image1.style.border="2px solid red"
        image2.style.border="none"
        idPelle.value=1;
        prezzoInterni = 1200;
        aggiornaPrezzo();
    });

    image2.addEventListener("click", function() {
        foto.src = "./assets/interniMarroni.jpg";
        image2.style.border="2px solid red"
        image1.style.border="none"
        idPelle.value=2;
        prezzoInterni = 1500;
        aggiornaPrezzo();
    });

    d1.addEventListener("click", function() {
        d1.style.border="2px solid red"
        d2.style.border="none"
        idDettagli.value=5;
        prezzoDettagli = 300;
        aggiornaPrezzo();
    });
    
    d2.addEventListener("click", function() {
        d2.style.border="2px solid red"
        d1.style.border="none"
        idDettagli.value=6;
        prezzoDettagli = 1000;
        aggiornaPrezzo();
    });

    function aggiornaPrezzo() {
        prezzoCorrente = prezzo + prezzoInterni + prezzoDettagli;
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
        foto.style.width="53%";
        foto.style.height="65%";
        foto.style.top="9.5rem";
    } else {
        foto.src = "./assets/foto1-4.png";
        foto.style.width="53%";
        foto.style.height="50%";
        foto.style.top="25%";

    }
}
function interni(){
    var foto = document.getElementById("macchina");
    if (foto.src.includes("./assets/internineri2.png")) {
        foto.src = "./assets/foto1-4.png";
        foto.style.width="53%";
        foto.style.height="50%";
        foto.style.top="25%";
    } else {
        foto.src = "./assets/internineri2.png";
        foto.style.width="53%";
        foto.style.height="65%";
        foto.style.top="9.5rem";
    }
}