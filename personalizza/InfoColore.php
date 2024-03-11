<?php
$conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");

if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "SELECT * FROM verniciatura WHERE IdVerniciatura = $id";

$result = mysqli_query($conn, $sql);

//Verifica se ci sono risultati
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {
    // Se non ci sono risultati, restituisci un oggetto vuoto
    echo json_encode(array());
}

mysqli_close($conn);
?>