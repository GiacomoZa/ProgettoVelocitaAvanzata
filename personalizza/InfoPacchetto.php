<?php
// Connessione al database
$conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");

// Verifica la connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Ottenere l'ID dell'elemento
$id = $_GET['id'];

// Query per selezionare i dati dalla tabella
$sql = "SELECT * FROM pacchetto WHERE IdPacchetto = $id";

// Esegui la query
$result = mysqli_query($conn, $sql);

// Verifica se ci sono risultati
if (mysqli_num_rows($result) > 0) {
    // Prendi il primo risultato (presumibilmente c'è solo uno)
    $row = mysqli_fetch_assoc($result);
    // Converti i dati in formato JSON e restituisci
    echo json_encode($row);
} else {
    // Se non ci sono risultati, restituisci un oggetto vuoto
    echo json_encode(array());
}

// Chiudi la connessione al database
mysqli_close($conn);
?>