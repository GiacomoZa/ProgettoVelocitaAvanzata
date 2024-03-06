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
    var image1 = document.getElementById("LBlack");
    var image2 = document.getElementById("LBrown");    

    var foto = document.getElementById("macchina");

    image1.addEventListener("click", function() {
        fetchImage("./assets/interniNeri.jpeg", foto);
    });

    image2.addEventListener("click", function() {
        fetchImage("./assets/interniMarroni.jpg", foto);
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

document.addEventListener("DOMContentLoaded", function() {
    var d1 = document.getElementById("dettagli1");
    var d2 = document.getElementById("dettagli2");

    d1.addEventListener("click", function() {
        d1.style.border="2px solid red"
        d2.style.border="none"
    });
    d2.addEventListener("click", function() {
        d2.style.border="2px solid red"
        d1.style.border="none"
    });
});