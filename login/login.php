<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbvelocitaavanzata";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if ($conn) {
    echo "Connessione al database riuscita";
} else {
    die("Errore nella connessione: " . mysqli_connect_error());
}

$user = $_POST['user'];
$psw = $_POST['psw'];
if ($user == " || $psw == "){
    print "Campi vuoti";
    print "<br><a href='group-1.html'>Torna al login</a>";
}
else{
    $query = "SELECT * FROM Utente WHERE user = '$user' && password = '$psw'";
    $risultato= mysqli_query($conn, $query);
    if (!$risultato){
        print "errore nel comando"; 
        exit();
    }

    $riga = mysqli_fetch_array($risultato);
    
    if ($riga)
        print "Benvenuto ". $riga['nome'].' '. $riga['cognome'];
    else{
        print "username o password errate";
        print "<br><a href='group-1.html'>torna al login</a>"; 
        print "<br><a href='group-2.html'>registrati</a>";
    }
}

mysqli_close($conn);
?>