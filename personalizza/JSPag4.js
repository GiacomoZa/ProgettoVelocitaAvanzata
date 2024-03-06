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