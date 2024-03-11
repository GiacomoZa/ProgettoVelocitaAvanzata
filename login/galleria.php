<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login/group-1.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galleria personale</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro%3A400%2C600%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
    <link rel="stylesheet" href="./styles/galleria.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="../home/index.php">
            <img src="assets/screenshot-2024-02-23-alle-0822-2.png" alt="Logo">
        </a>
    </div>
    <h1>Galleria</h1>
</header>
<?php
$idUtente = isset($_SESSION["id_utente"]) ? $_SESSION["id_utente"] : null;
$Utente = $_SESSION["username"];

$conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

$sqlListaPersonalizzazione = "SELECT IdPersonalizzazione, prezzoTot FROM listapersonalizzazione WHERE IdUtente = $idUtente";
$resultListaPersonalizzazione = $conn->query($sqlListaPersonalizzazione);

// Se sono presenti risultati, stampa la tabella per la lista di personalizzazioni
if ($resultListaPersonalizzazione->num_rows > 0) {
    echo "<h2>Lista Personalizzazione</h2>";
    echo "<table border='1'>";
    echo "<tr><th>IdPersonalizzazione</th><th>Prezzo Totale</th></tr>";
    while ($row = $resultListaPersonalizzazione->fetch_assoc()) {
        echo "<tr><td>" . $row["IdPersonalizzazione"] . "</td><td>" . $row["prezzoTot"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<br><br><br><br> <a style=text-align:center>Nessun risultato trovato per la lista di personalizzazioni <br><br><br><br><br><br></a>";
}


$sql = "SELECT td.mail, td.datatest, CONCAT(c.indirizzo, ', ', c.citta) AS indirizzo
        FROM testdrive td
        INNER JOIN seleziona s ON td.IdTest = s.IdTest
        INNER JOIN concessionaria c ON s.IdConcessionaria = c.IdConcessionaria
        WHERE td.IdUtente = $idUtente";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Test Drive e Concessionarie</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Mail</th><th>Data Test</th><th>Indirizzo Concessionaria</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["mail"] . "</td><td>" . $row["datatest"] . "</td><td>" . $row["indirizzo"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<a style=text-align:center>Nessun risultato trovato per i test drive e le relative concessionarie</a>";
}

$conn->close();
?>
</body>
</html>