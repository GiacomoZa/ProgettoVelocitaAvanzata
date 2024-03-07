<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbvelocitaavanzata";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Errore nella connessione: " . mysqli_connect_error());
}

// Verifica se è stato inviato un modulo con il metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // If the form is submitted, perform authentication logic
    $user = $_POST['user'];
    $psw = $_POST['psw'];

    if ($user == "" || $psw == "") {
        echo "Campi vuoti";
    } else {
        $query = "SELECT * FROM Utente WHERE user = '$user' && password = '$psw'";
        $risultato = mysqli_query($conn, $query);
        if (!$risultato) {
            echo "Errore nel comando"; 
            exit();
        }

        $riga = mysqli_fetch_array($risultato);

        if ($riga) {
            // Set session variable for the user
            $_SESSION['username'] = $user;
            // Redirect to home page
            header("Location: ../home/home.html");
        } else {
            echo "Username o password errate";
        }
    }
}

mysqli_close($conn);
?>