document.addEventListener("DOMContentLoaded", function() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          // Check if the response contains an username
          var username = this.responseText;
          if (username) {
              // If yes, display the username in the loginButton element
              document.getElementById("loginButton").innerText = "Welcome, " + username;
          }
      }
  };
  xmlhttp.open("GET", "../login/getUsername.php", true);
  xmlhttp.send();
});