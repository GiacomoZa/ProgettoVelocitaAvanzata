<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../login/group-1.php");
  exit;
}  

//codice per l'invio di una mail, mysql non è progettato per l'invio di email, in questo caso non succederà nulla
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        $to = $email;
        
        $subject = "Grazie per aver ordinato la tua nuova MESER";
        
        $message = "Grazie per aver ordinato la tua nuova MESER!, <br><br><br>Abbiamo preso il tuo ordine e inizieremo a lavorarci al più presto";
        
        $headers = "From: velocitaavanzata.costumers@gmail.com"; 
        
        if (mail($to, $subject, $message, $headers)) {
            echo "Email inviata con successo a " . $to;
        } else {
            echo "Errore nell'invio dell'email.";
        }
    } else {
        echo "Indirizzo email non valido.";
    }
    header("Location: ../home/index.php");
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Roboto', 'Source Sans Pro';
            font-weight: bold;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        a {
            color: #000;
            text-decoration: none;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <a href="../home/index.php">Torna alla home</a>
</body>
</html>
