<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbvelocitaavanzata";

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connessione al database
    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    // Verifica della connessione
    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }

    // Recupera i dati inviati dal form
    $email = $_POST['email'];
    $date = $_POST['date'];
    $concessionaria = (int) $_POST['concessionaria'];
    
    // Ottieni il massimo IDTest attualmente presente nella tabella testdrive
    $sql_max_id = "SELECT MAX(IdTest) AS max_id FROM testdrive";
    $result = $conn->query($sql_max_id);
    $row = $result->fetch_assoc();
    $max_id = $row["max_id"];

    // Genera un nuovo ID per il test drive
    $new_id = $max_id + 1;

    
    // Prepara la query per l'inserimento dei dati nel database
    $sql_testdrive = "INSERT INTO testdrive (IdTest, mail, datatest, IdUtente) VALUES ('$new_id', '$email', '$date', '{$_SESSION['id_utente']}')";

    if ($conn->query($sql_testdrive) === TRUE) {
        echo "Dati inseriti correttamente nella tabella 'testdrive'.";
    } else {
        echo "Errore durante l'inserimento dei dati nella tabella 'testdrive': " . $conn->error;
    }

    $sql_seleziona = "INSERT INTO seleziona (IdTest, IdConcessionaria) VALUES ('$new_id', '$concessionaria')";

    if ($conn->query($sql_seleziona) === TRUE) {
        echo "Dati inseriti correttamente nella tabella 'seleziona'.";
    } else {
        echo "Errore durante l'inserimento dei dati nella tabella 'seleziona': " . $conn->error;
    }

    // Esegui la query di inserimento
    $result = mysqli_query($conn, $sql_testdrive);
    $result2 = mysqli_query($conn, $sql_seleziona);

    if ($result) {
        // Chiudi la connessione al database
        mysqli_close($conn);
    
        // Invia un messaggio di conferma
        echo "<script>alert('Grazie per la prenotazione. Un'email è stata inviata all'indirizzo $email.');</script>";
        // Esegui il reindirizzamento alla pagina home
        header("Location: ../home/home.php");
        exit; // Assicurati di uscire dallo script dopo il reindirizzamento
    } else {
        // Se si verifica un errore nell'inserimento, visualizza un messaggio di errore
        echo "Errore nell'inserimento: " . mysqli_error($conn);
    }
}
?>
