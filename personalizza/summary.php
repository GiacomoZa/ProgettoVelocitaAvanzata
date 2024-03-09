<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../login/group-1.html");
  exit;
}

$prezzo = $_SESSION['prezzo'];
if (isset($_SESSION["idM"])) {
  $idM = $_SESSION["idM"];
}
if (isset($_SESSION["idC"])) {
  $idC = $_SESSION["idC"];
}
if (isset($_SESSION["cerchi"])) {
  $cerchi = $_SESSION["cerchi"];
}
if (isset($_SESSION["pelle"])) {
  $pelle = $_SESSION["pelle"];
}
if (isset($_SESSION["dettagli"])) {
  $dettagli = $_SESSION["dettagli"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("Location: ordineEffettuato.html");
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
  <title>Summary</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500"/>
  <link rel="stylesheet" href="./styles/summary.css"/>
  <script src="./JSPag4.js"></script>
</head>
<body onload="datiMotore(<?php echo $idM; ?>), datiColore(<?php echo $idC; ?>), datiCerchi(<?php echo $cerchi; ?>), datiDettagli(<?php echo $dettagli; ?>), datiInterni(<?php echo $pelle; ?>)">
<div class="summary-CZt">
  <div class="rectangle-3-JN2">
  </div>
  <div class="rectangle-1-c7p">
  </div>
  <div class="rectangle-2-uMp">
  </div>
  <div class="rectangle-6-1Qr">
  </div>
  <p class="velocit-avanzata-meser-WcW">
    <span class="velocit-avanzata-meser-WcW-sub-0">VELOCITÀ AVANZATA </span>
    <span class="velocit-avanzata-meser-WcW-sub-1">Meser</span>
  </p>
  <p class="resoconto-PZp">Resoconto</p>
  <div class="line-1-PiE">
  </div>
  <div class="line-2-hU2">
  </div>
  <p class="item-6-000--QdL" id="CostoColore"><!--costo vernice--></p>
  <p class="item-10-000--5zN" id="CostoMotore"><!--costo motore--></p>
  <p class="item-59-000--BXc">€ 69000</p>
  <p class="item-10-000--GZ4" id="CostoDettagli"><!--costo dettagli--></p>
  <p class="item-109-000--BR8" id="totale"><?php echo $prezzo; ?><!--totale--></p>
  <p class="totale--HDG">Totale: </p>
  <p class="velocit-avanzata-meser-modello-sport-BZY">Velocità Avanzata Meser</p>
  <div class="frame-1-sSN">
    <p class="meser-AwG">Meser</p>
    <p class="modello-sport-K3U">
      <span class="modello-sport-K3U-sub-0">+ </span>
      <span class="modello-sport-K3U-sub-1" id="NomeMotore">Motore: <!--motore--></span>
    </p>
    <p class="verniciatura-metallizzata-fire-red-F5Y">
      <span class="verniciatura-metallizzata-fire-red-F5Y-sub-0">+</span>
      <span class="verniciatura-metallizzata-fire-red-F5Y-sub-1" id="NomeColore"> Verniciatura: <!--tipo vernice--><!--colore vernice--></span>
    </p>
    <p class="cerchioni-sport-jet-black-d66">
      <span class="cerchioni-sport-jet-black-d66-sub-0">+</span>
      <span class="cerchioni-sport-jet-black-d66-sub-1" id="NomeCerchi"> Cerchi in lega: <!--cerchi in lega si/no--></span>
    </p>
    <p class="interni-pelle-nera-pAa">
      <span class="interni-pelle-nera-pAa-sub-0">+</span>
      <span class="interni-pelle-nera-pAa-sub-1" id="NomeInterni"> Interni: <!--tipo interni--></span>
    </p>
    <p class="dettagli-in-aluminio-dti">
      <span class="dettagli-in-aluminio-dti-sub-0">+</span>
      <span class="dettagli-in-aluminio-dti-sub-1" id="NomeDettagli"> Dettagli: <!--tipo dettagli--></span>
    </p>
  </div>
  <p class="item-25-000--F9Q" id="CostoCerchi"><!--costo cerchi--></p>
  <p class="item-9-000--YeJ" id="CostoInterni"><!--costo interni--></p>
  <div class="rectangle-11-dfk">
  </div>
  <div class="rectangle-12-KYa">
  </div>
  <a class="esterni-oyY" onclick="esterni()">Esterni</a>
  <a class="interni-i4v" onclick="interni()">Interni</a>
  <p class="prezzo-109-000-D1g">
    <span class="prezzo-109-000-D1g-sub-0">Prezzo:</span>
    <span class="prezzo-109-000-D1g-sub-1"><?php echo $prezzo; ?></span>
  </p>
  <img class="foto1-4-oEn" src="./assets/foto1-4.png" id="macchina"/>
  <a class="compra-meser-Vcr" value="Compra Meser" onclick="submitForm()">Compra Meser</a>
  <div class="concessionaria-container">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="myForm">
  <label for="concessionaria" class="dropConcessionaria">Seleziona una concessionaria:</label>
  <select id="concessionaria" name="concessionaria">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");
    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM concessionaria";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['IdConcessionaria'] . "'>" . $row['indirizzo'] . ", " . $row['regione'] . ", " . $row['citta'] . "</option>";
        }
    } else {
        echo "Nessuna concessionaria trovata.";
    }
    mysqli_close($conn);
    ?>
  </select>
</form>
</div>
</div>
</body>
</html>
<script>
  function submitForm() {
    document.getElementById("myForm").submit();
  }
</script>