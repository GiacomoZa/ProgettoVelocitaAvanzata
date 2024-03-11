<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../login/group-1.php");
  exit;
}  

$prezzo = $_SESSION['prezzo'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["prezzo2"])) {
      $_SESSION["prezzo"] = $_POST["prezzo2"];
  }
  if (isset($_POST["coloreSelezionato"])) {
      $_SESSION["idC"] = $_POST["coloreSelezionato"];
  }
  if (isset($_POST["cerchioSelezionato"])) {
    $_SESSION["cerchi"] = $_POST["cerchioSelezionato"];
  }

  header("Location: third-page.php");
  exit; 
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Second page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500"/>
  <link rel="stylesheet" href="./styles/second-page.css"/>
  <script src="JSPag2.js"></script>
</head>
<body>
<div class="first-page-3kr">
  <div class="rectangle-3-gJ2">
  </div>
  <p class="price-69-000-HYi">
    <span class="price-69-000-HYi-sub-0">Prezzo:</span>
    <span class="price-69-000-HYi-sub-1" id="price-69-000-HYi-sub-1"><?php echo $prezzo;?></span>
  </p>
  <div class="rectangle-1-AW2">
  </div>
  <div class="rectangle-2-3pi">
  </div>
  <div class="rectangle-6-jb4">
  </div>
  <div class="rectangle-7-DFL">
  </div>
  <div class="rectangle-8-J1t">
  </div>
  <p class="velocit-avanzata-meser-P3L">
    <span class="velocit-avanzata-meser-P3L-sub-0">VELOCITÀ AVANZATA </span>
    <span class="velocit-avanzata-meser-P3L-sub-1">Meser</span>
  </p>
  <p class="colore-T58">Colore</p>
  <img id="MRed" class="MetallicRed" src="./assets/MetallicRed.jpg" alt="MetallicRed">
  <img id="MBlu" class="MetallicBlue" src="./assets/MetallicBlue.jpg" alt="MetallicBlue">
  <img id="MBlack" class="MetallicBlack" src="./assets/MetallicBlack.png" alt="MetallicBlack">
  <img id="PWhite" class="PearlWhite" src="./assets/PearlWhite.png" alt="PearlWhite">
  <p class="cerchi-9Cr">Cerchi</p>
  <img id="cerchio1" class="GreyWheels" src="./assets/GreyWheels.png" alt="GreyWheels">
  <img id="cerchio2" class="BlackWheels" src="./assets/BlackWheels.png" alt="BlackWheels">

  <form id="formData" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" id="coloreSelezionato" name="coloreSelezionato" value="1">
    <input type="hidden" id="cerchioSelezionato" name="cerchioSelezionato" value="3">
    <input type="hidden" id="prezzo" name="prezzo" value="<?php echo $prezzo;?>">
    <input type="hidden" id="prezzo2" name="prezzo2" value="">
    <input type="submit" class="procedi-1hY" value="Procedi">
  </form>

  <a class="esterni-KCS" onclick="esterni()">Esterni</a>
  <a class="interni-Qjg" onclick="interni()">Interni</a>
  <img id="macchina" class="foto1-2-ikN" src="./assets/foto1-4.png"/>
</div>
</body>
</html>