<?php
session_start(); 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dbvelocitaavanzata";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $date = $_POST['date'];
    $concessionaria = (int) $_POST['concessionaria'];
    
     // Ottieni il massimo IDTest attualmente presente nella tabella testdrive
     $sql_max_id = "SELECT MAX(IdTest) AS max_id FROM testdrive";
     $result = $conn->query($sql_max_id);
     $row = $result->fetch_assoc();
     $max_id = $row["max_id"];
 
     $new_id = $max_id + 1;
 
     $sql_testdrive = "INSERT INTO testdrive (IdTest, mail, datatest, IdUtente) VALUES ('$new_id', '$email', '$date', '{$_SESSION['id_utente']}')";
     $sql_seleziona = "INSERT INTO seleziona (IdTest, IdConcessionaria) VALUES ('$new_id', '$concessionaria')";
 
     if ($conn->query($sql_testdrive) === TRUE && $conn->query($sql_seleziona) === TRUE) {
         mysqli_close($conn);
     
         echo "<script>alert('Grazie per la prenotazione. Un'email è stata inviata all'indirizzo $email.');</script>";
         header("Location: ../home/home.php");
         exit; 
     } else {
         echo "Errore nell'inserimento: " . $conn->error;
     }

    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
        $to = $email;
            
        $subject = "Grazie per aver prenotato il test drive";
            
        $message = "Grazie per aver prenotato il test drive della nuova MESER!";
            
        $headers = "From: velocitaavanzata.costumers@gmail.com"; 
            
            if (mail($to, $subject, $message, $headers)) {
                echo "Email inviata con successo a " . $to;
            } else {
                echo "Errore nell'invio dell'email.";
            }
    } else {
        echo "Indirizzo email non valido.";
    }
 }
?>
