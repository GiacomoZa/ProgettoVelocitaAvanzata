<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbvelocitaavanzata";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if ($conn) {
    echo "Connessione al database riuscita";
} else {
    die("Errore nella connessione: " . mysqli_connect_error());
}

// Sanitize user input
$user = mysqli_real_escape_string($conn, $_POST['user']);
$psw = mysqli_real_escape_string($conn, $_POST['psw']);
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$cognome = mysqli_real_escape_string($conn, $_POST['cognome']);

$query = "INSERT INTO Utente (Nome, Cognome, user, password) 
          VALUES ('$nome', '$cognome','$user', '$psw')";
        
if (mysqli_query($conn, $query)) {
    echo "Registrazione avvenuta con successo";
} else {
    echo "Errore nell'inserimento: " . mysqli_error($conn);
}

mysqli_close($conn);
?>