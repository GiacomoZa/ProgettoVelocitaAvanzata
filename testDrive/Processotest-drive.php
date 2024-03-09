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
    
    
    // Debug: Verifica i valori delle variabili
    var_dump($email, $date, $concessionaria);

    // Prepara la query per l'inserimento dei dati nel database
    $query = "INSERT INTO NomeDellaTabella (email, data_preferita, id_concessionaria, id_utente) 
              VALUES ('$email', '$date', '$concessionaria', '{$_SESSION['idUtente']}')";
    // Debug: Verifica la stringa della query
    echo "<script>alert('Query: $query');</script>";

    // Esegui la query di inserimento
    $result = mysqli_query($conn, $query);

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
