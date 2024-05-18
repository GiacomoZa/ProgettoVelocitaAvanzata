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
        // Prepara una query parametrizzata per verificare le credenziali
        $stmt = $conn->prepare("SELECT * FROM Utente WHERE user = ? AND password = ?");
        $stmt->bind_param("ss", $user, $psw);
        $stmt->execute();
        $risultato = $stmt->get_result();

        if ($riga = $risultato->fetch_array(MYSQLI_ASSOC)) {
            $_SESSION['username'] = $user;

            // Prepara una query parametrizzata per ottenere l'ID dell'utente
            $stmt_id = $conn->prepare("SELECT IdUtente FROM Utente WHERE user = ?");
            $stmt_id->bind_param("s", $user);
            $stmt_id->execute();
            $result_id_utente = $stmt_id->get_result();
            $row_id_utente = $result_id_utente->fetch_assoc();
            $id_utente = $row_id_utente['IdUtente'];

            $_SESSION['id_utente'] = $id_utente;

            if (isset($_POST['ricordami']) && $_POST['ricordami']) {               
                setcookie('utente', $id_utente, time() + (60*60), "/"); // Scade dopo un'ora
                setcookie('username', $user, time() + (60*60), "/");
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
