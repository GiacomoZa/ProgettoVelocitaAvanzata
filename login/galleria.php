<?php
    session_start();
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
      <a href="../home/home.php">
        <img src="assets/screenshot-2024-02-23-alle-0822-2.png" alt="Logo">
      </a>
    </div>
    <h1>Galleria</h1>
</header>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../login/group-1.html");
  exit;
}

$idUtente = isset($_SESSION["id_utente"]) ? $_SESSION["id_utente"] : null;
$Utente = $_SESSION["username"];

$conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");
// Verifica della connessione
if ($conn->connect_error) {
  die("Connessione al database fallita: " . $conn->connect_error);
}

// Query per selezionare i dati dalla tabella listapersonalizzazione
$sql = "SELECT IdPersonalizzazione, prezzoTot FROM listapersonalizzazione WHERE IdUtente = $idUtente";

$result = $conn->query($sql);

// Se sono presenti risultati, stampa la tabella
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>IdPersonalizzazione</th><th>Prezzo Totale</th></tr>";
    // Output dei dati di ogni riga
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["IdPersonalizzazione"] . "</td><td>" . $row["prezzoTot"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nessun risultato trovato";
}

$conn->close();
?>
</body>
</html>