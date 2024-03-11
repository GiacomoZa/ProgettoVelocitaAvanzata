<?php
$conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");

if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "SELECT * FROM motore WHERE IdMotore = $id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {
    echo json_encode(array());
}

mysqli_close($conn);
?>