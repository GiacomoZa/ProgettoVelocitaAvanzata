<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbvelocitaavanzata";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Verifica se è stata effettuata una connessione al database
if (!$conn) {
    die("Errore nella connessione: " . mysqli_connect_error());
}

// Recupera i dati inviati dal modulo di login
$user = $_POST['user'];
$psw = $_POST['psw'];

// Controlla se sono stati inviati username e password
if ($user == "" || $psw == "") {
    echo "Campi vuoti";
} else {
    // Esegui la query per controllare le credenziali dell'utente
    $query = "SELECT * FROM Utente WHERE user = '$user' && password = '$psw'";
    $risultato = mysqli_query($conn, $query);

    if (!$risultato) {
        echo "Errore nel comando";
        exit();
    }

    // Controlla se le credenziali sono corrette
    $riga = mysqli_fetch_array($risultato);
    if ($riga) {
        // Memorizza l'username dell'utente nella sessione
        $_SESSION['username'] = $user;
        // Reindirizza alla pagina home
        header("Location: ../home/home.php");
    } else {
        echo "Username o password errate";
    }
}

mysqli_close($conn);
?>
