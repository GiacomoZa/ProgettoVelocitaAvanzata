<?php
ini_set('display_errors', 1);
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

// Controlla se è stato inviato il modulo di registrazione
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati dal modulo di registrazione
    $user = $_POST['user'];
    $psw = $_POST['psw'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];


    if ($user == "" || $psw == "" || $nome == "" || $cognome == "") {
        header("Location: group-2.php?error2=invalid");
    }else{
        // Sanitizza i dati inseriti dall'utente per evitare SQL injection
    $user = mysqli_real_escape_string($conn, $user);
    $psw = mysqli_real_escape_string($conn, $psw);
    $nome = mysqli_real_escape_string($conn, $nome);
    $cognome = mysqli_real_escape_string($conn, $cognome);

    // Esegui la query per inserire l'utente nel database
    $query = "INSERT INTO Utente (Nome, Cognome, user, password) 
              VALUES ('$nome', '$cognome','$user', '$psw')";
    
    // Esegui la query per inserire l'utente nel database
    try {
        // Esegui la query di inserimento
        mysqli_query($conn, $query);

        // Ottieni l'ID dell'utente appena inserito
        $id_utente = mysqli_insert_id($conn);

        // Memorizza l'ID dell'utente e l'username nella sessione
        $_SESSION['id_utente'] = $id_utente;
        $_SESSION['username'] = $user;
    
        // Reindirizza alla pagina home solo se l'inserimento è avvenuto con successo
        header("Location: ../home/home.php");
        exit; // Assicurati di uscire dallo script dopo il reindirizzamento
    } catch (Exception $e) {
        // Questo blocco verrà eseguito solo se ci sono eccezioni PHP
        header("Location: group-2.php?error=invalid");
    }
    }
    
  
}

mysqli_close($conn);
?>
