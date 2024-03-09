<?php
// Connessione al database
$conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");

// Verifica la connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}
if(isset($_POST['idM'])){
    $id = $_POST['idM'];

    $sql = "SELECT * FROM motore WHERE IdMotore = $id";
    
    // Esegui la query
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // Prendi il primo risultato (presumibilmente c'è solo uno)
        $row = mysqli_fetch_assoc($result);
        // Converti i dati in formato JSON e restituisci
        echo json_encode($row);
    } else {
        // Se non ci sono risultati, restituisci un oggetto vuoto
        echo json_encode(array());
    }
} 

if(isset($_POST['idP'])){
    $id = $_POST['idP'];

    $sql = "SELECT * FROM pacchetto WHERE IdPacchetto = $id";
    
    // Esegui la query
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // Prendi il primo risultato (presumibilmente c'è solo uno)
        $row = mysqli_fetch_assoc($result);
        // Converti i dati in formato JSON e restituisci
        echo json_encode($row);
    } else {
        // Se non ci sono risultati, restituisci un oggetto vuoto
        echo json_encode(array());
    }
} 

if(isset($_POST['idC'])){
    $id = $_POST['idC'];

    $sql = "SELECT * FROM verniciatura WHERE IdVerniciatura = $id";
    
    // Esegui la query
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // Prendi il primo risultato (presumibilmente c'è solo uno)
        $row = mysqli_fetch_assoc($result);
        // Converti i dati in formato JSON e restituisci
        echo json_encode($row);
    } else {
        // Se non ci sono risultati, restituisci un oggetto vuoto
        echo json_encode(array());
    }
}

if(isset($_POST['cerchi'])){
    $id = $_POST['cerchi'];

    $sql = "SELECT * FROM optionals WHERE IdOptionals = $id";
    
    // Esegui la query
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // Prendi il primo risultato (presumibilmente c'è solo uno)
        $row = mysqli_fetch_assoc($result);
        // Converti i dati in formato JSON e restituisci
        echo json_encode($row);
    } else {
        // Se non ci sono risultati, restituisci un oggetto vuoto
        echo json_encode(array());
    }
}

if(isset($_POST['pelle'])){
    $id = $_POST['pelle'];

    $sql = "SELECT * FROM optionals WHERE IdOptionals = $id";
    
    // Esegui la query
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // Prendi il primo risultato (presumibilmente c'è solo uno)
        $row = mysqli_fetch_assoc($result);
        // Converti i dati in formato JSON e restituisci
        echo json_encode($row);
    } else {
        // Se non ci sono risultati, restituisci un oggetto vuoto
        echo json_encode(array());
    }
}

if(isset($_POST['dettagli'])){
    $id = $_POST['dettagli'];

    $sql = "SELECT * FROM optionals WHERE IdOptionals = $id";
    
    // Esegui la query
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // Prendi il primo risultato (presumibilmente c'è solo uno)
        $row = mysqli_fetch_assoc($result);
        // Converti i dati in formato JSON e restituisci
        echo json_encode($row);
    } else {
        // Se non ci sono risultati, restituisci un oggetto vuoto
        echo json_encode(array());
    }
}

// Chiudi la connessione al database
mysqli_close($conn);
?>
