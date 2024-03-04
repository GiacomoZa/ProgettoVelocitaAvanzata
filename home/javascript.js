function scorri(sezione) {
    var sottotitolo = document.getElementById(sezione);
    sottotitolo.scrollIntoView({ behavior: 'smooth'});
  }


  function Redirect(pagina) {
    // Cambia l'URL con quello della pagina a cui vuoi reindirizzare l'utente
    window.location.href = pagina;
}


  