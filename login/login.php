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

// Controlla se è stato inviato il modulo di login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati dal modulo di login
    $user = $_POST['user'];
    $psw = $_POST['psw'];

    // Controlla se sono stati inviati username e password
    if ($user == "" || $psw == "") {
        header("Location: group-1.php?error2=invalid");
        exit;
    } else {
        $query = "SELECT * FROM Utente WHERE user = '$user' && password = '$psw'";
        $risultato = mysqli_query($conn, $query);

        // Controlla se le credenziali sono corrette
        $riga = mysqli_fetch_array($risultato);
        if ($riga) {
            // Memorizza l'username dell'utente nella sessione
            $_SESSION['username'] = $user;

            // Esegui la query per ottenere l'ID utente
            $query_id_utente = "SELECT IdUtente FROM Utente WHERE user = '$user'";
            $result_id_utente = mysqli_query($conn, $query_id_utente);
            $row_id_utente = mysqli_fetch_assoc($result_id_utente);
            $id_utente = $row_id_utente['IdUtente'];

            // Memorizza l'ID utente nella sessione
            $_SESSION['id_utente'] = $id_utente;

             if (!empty($_POST['ricordami'])) {
                // Imposta il cookie per memorizzare l'ID utente
               
                setcookie('utente',$_SESSION['id_utente'], time() + 3600, "/"); // Scade dopo un'ora
                setcookie('username', $_SESSION['username'], time() + 3600, "/");
            }
           
            // Reindirizza alla pagina home
            header("Location: ../home/home.php");
            exit;
        } else {
            // Se le credenziali sono errate, visualizza un messaggio di errore
            header("Location: group-1.php?error=invalid");
            exit;
        }
    }
}

mysqli_close($conn);
?>
