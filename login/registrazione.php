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
    } else {
        // Prepara la query parametrizzata
        $query = "INSERT INTO Utente (Nome, Cognome, user, password) VALUES (?, ?, ?, ?)";
        
        if ($stmt = mysqli_prepare($conn, $query)) {
            // Associa i parametri
            mysqli_stmt_bind_param($stmt, 'ssss', $nome, $cognome, $user, $psw);
            
            // Esegui la query
            if (mysqli_stmt_execute($stmt)) {
                $id_utente = mysqli_insert_id($conn);
                
                $_SESSION['id_utente'] = $id_utente;
                $_SESSION['username'] = $user;
                
                header("Location: ../home/index.php");
                exit;
            } else {
                header("Location: group-2.php?error=invalid");
            }
            
            // Chiudi lo statement
            mysqli_stmt_close($stmt);
        } else {
            header("Location: group-2.php?error=invalid");
        }
    }
}

mysqli_close($conn);
?>