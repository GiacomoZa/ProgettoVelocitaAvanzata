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

    var foto = document.getElementById("macchina");

    image1.addEventListener("click", function() {
        fetchImage("./assets/macchinaBlu.png", foto);
    });

    image2.addEventListener("click", function() {
        fetchImage("./assets/macchinaNera.png", foto);
    });

    image3.addEventListener("click", function() {
        fetchImage("./assets/macchinaBianca.png", foto);
    });

    image4.addEventListener("click", function() {
        fetchImage("./assets/foto1-4.png", foto);
    });
});

function esterni(){
    var foto = document.getElementById("macchina");
    if (foto.src.includes("./assets/foto1-4.png")) {
        foto.src = "./assets/internineri2.png";
        foto.style.width="78rem";
        foto.style.right="45%";
    } else {
        foto.src = "./assets/foto1-4.png";
        foto.style.width="60%";
        foto.style.right="44%";
    }
}
function interni(){
    var foto = document.getElementById("macchina");
    if (foto.src.includes("./assets/internineri2.png")) {
        foto.src = "./assets/foto1-4.png";
        foto.style.width="60%";
        foto.style.right="44%";
    } else {
        foto.src = "./assets/internineri2.png";
        foto.style.width="78rem";
        foto.style.right="45%";
    }
}

function selezionaCerchio(this){
    var cerchio1 = document.getElementById("cerchio1");
    var cerchio2 = document.getElementById("cerchio1");
    var cerchio3 = document.getElementById("cerchio1");

}