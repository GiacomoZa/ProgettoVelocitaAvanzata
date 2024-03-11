<?php
ini_set('display_errors', 1);
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbvelocitaavanzata";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Errore nella connessione: " . mysqli_connect_error());
}

// Controlla se è stato inviato il modulo di registrazione
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $psw = $_POST['psw'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];


    if ($user == "" || $psw == "" || $nome == "" || $cognome == "") {
        header("Location: group-2.php?error2=invalid");
    }else{

    //controlli per sql injection
    $user = mysqli_real_escape_string($conn, $user);
    $psw = mysqli_real_escape_string($conn, $psw);
    $nome = mysqli_real_escape_string($conn, $nome);
    $cognome = mysqli_real_escape_string($conn, $cognome);

    $query = "INSERT INTO Utente (Nome, Cognome, user, password) 
              VALUES ('$nome', '$cognome','$user', '$psw')";
    
    //query per inserire l'utente nel database
    try {
        mysqli_query($conn, $query);

        $id_utente = mysqli_insert_id($conn);

        $_SESSION['id_utente'] = $id_utente;
        $_SESSION['username'] = $user;
    
        header("Location: ../home/home.php");
        exit; // Assicurati di uscire dallo script dopo il reindirizzamento
    } catch (Exception $e) {
        header("Location: group-2.php?error=invalid");
    }
    }
 
}

mysqli_close($conn);
?>