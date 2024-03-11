<?php
$conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");

if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

//in base al valore con cui si chiama la pagina si esegue un codice differente
if(isset($_POST['idM'])){
    $id = $_POST['idM'];

    $sql = "SELECT * FROM motore WHERE IdMotore = $id";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo json_encode(array());
    }
} 

if(isset($_POST['idP'])){
    $id = $_POST['idP'];

    $sql = "SELECT * FROM pacchetto WHERE IdPacchetto = $id";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo json_encode(array());
    }
} 

if(isset($_POST['idC'])){
    $id = $_POST['idC'];

    $sql = "SELECT * FROM verniciatura WHERE IdVerniciatura = $id";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo json_encode(array());
    }
}

if(isset($_POST['cerchi'])){
    $id = $_POST['cerchi'];

    $sql = "SELECT * FROM optionals WHERE IdOptionals = $id";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo json_encode(array());
    }
}

if(isset($_POST['pelle'])){
    $id = $_POST['pelle'];

    $sql = "SELECT * FROM optionals WHERE IdOptionals = $id";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo json_encode(array());
    }
}

if(isset($_POST['dettagli'])){
    $id = $_POST['dettagli'];

    $sql = "SELECT * FROM optionals WHERE IdOptionals = $id";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo json_encode(array());
    }
}

mysqli_close($conn);
?>
