<?php
// Connessione al database
$conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");

// Verifica la connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Query per selezionare le concessionarie
$sql = "SELECT * FROM concessionaria";

// Esegui la query
$result = mysqli_query($conn, $sql);

// Verifica se ci sono risultati
if (mysqli_num_rows($result) > 0) {
    // Inizia la costruzione del dropdown menu
    echo '<select id="concessionariaDropdown">';
    
    // Itera sui risultati della query
    while ($row = mysqli_fetch_assoc($result)) {
        // Costruisci la stringa per ciascuna riga del dropdown menu
        $option = $row['IdConcessionaria'] . ', ' . $row['indirizzo'] . ', ' . $row['regione'] . ', ' . $row['citta'];
        // Aggiungi l'opzione al dropdown menu
        echo '<option value="' . $option . '">' . $option . '</option>';
    }
    
    // Chiudi il dropdown menu
    echo '</select>';
} else {
    echo "Nessuna concessionaria trovata.";
}

// Chiudi la connessione al database
mysqli_close($conn);
?>
