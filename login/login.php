<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbvelocitaavanzata";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Errore nella connessione: " . mysqli_connect_error());
}

// Controlla se è stato inviato il modulo di login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $psw = $_POST['psw'];

    if ($user == "" || $psw == "") {
        header("Location: group-1.php?error2=invalid");
        exit;
    } else {
        //query al database per verificare le credenziali e salvarle nella sessione
        $query = "SELECT * FROM Utente WHERE user = '$user' && password = '$psw'";
        $risultato = mysqli_query($conn, $query);

        $riga = mysqli_fetch_array($risultato);
        if ($riga) {

            $_SESSION['username'] = $user;

            $query_id_utente = "SELECT IdUtente FROM Utente WHERE user = '$user'";
            $result_id_utente = mysqli_query($conn, $query_id_utente);
            $row_id_utente = mysqli_fetch_assoc($result_id_utente);
            $id_utente = $row_id_utente['IdUtente'];

            $_SESSION['id_utente'] = $id_utente;

            if ($_POST['ricordami']) {               
                setcookie('utente',$id_utente, time() + (60*60), "/"); // Scade dopo un'ora
                setcookie('username',$user, time() + (60*60), "/");
            }
           
            header("Location: ../home/index.php");
            exit;
        } else {
            header("Location: group-1.php?error=invalid");
            exit;
        }
    }
}

mysqli_close($conn);
?>
