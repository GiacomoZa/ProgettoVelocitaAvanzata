function scorri(sezione) {
    var sottotitolo = document.getElementById(sezione);
    sottotitolo.scrollIntoView({ behavior: 'smooth'});
  }


  function Redirect(pagina) {
    // Cambia l'URL con quello della pagina a cui vuoi reindirizzare l'utente
    window.location.href = pagina;
}

// Codice JavaScript per la richiesta AJAX
document.addEventListener("DOMContentLoaded", function() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("loginButton").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("POST", "../login/login.php", true);
  xmlhttp.send();
});






  