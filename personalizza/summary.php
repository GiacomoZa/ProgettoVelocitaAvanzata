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
<body>
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
  <p class="compra-meser-Vcr">ComPRA MESER </p>
  <div class="line-1-PiE">
  </div>
  <div class="line-2-hU2">
  </div>
  <p class="item-6-000--QdL">6 000 €</p>
  <p class="item-10-000--5zN">10 000 €</p>
  <p class="item-59-000--BXc">59 000 €</p>
  <p class="item-10-000--GZ4">10 000 €</p>
  <p class="item-109-000--BR8">109 000 €</p>
  <p class="totale--HDG">Totale:</p>
  <p class="velocit-avanzata-meser-modello-sport-BZY">Velocità Avanzata Meser Modello Sport</p>
  <div class="frame-1-sSN">
    <p class="meser-AwG">Meser</p>
    <p class="modello-sport-K3U">
      <span class="modello-sport-K3U-sub-0">+ </span>
      <span class="modello-sport-K3U-sub-1">Modello Sport</span>
    </p>
    <p class="verniciatura-metallizzata-fire-red-F5Y">
      <span class="verniciatura-metallizzata-fire-red-F5Y-sub-0">+</span>
      <span class="verniciatura-metallizzata-fire-red-F5Y-sub-1"> Verniciatura metallizzata &#34;Fire Red&#34;</span>
    </p>
    <p class="cerchioni-sport-jet-black-d66">
      <span class="cerchioni-sport-jet-black-d66-sub-0">+</span>
      <span class="cerchioni-sport-jet-black-d66-sub-1"> 19&#34; cerchioni Sport, Jet Black</span>
    </p>
    <p class="interni-pelle-nera-pAa">
      <span class="interni-pelle-nera-pAa-sub-0">+</span>
      <span class="interni-pelle-nera-pAa-sub-1"> Interni pelle nera</span>
    </p>
    <p class="dettagli-in-aluminio-dti">
      <span class="dettagli-in-aluminio-dti-sub-0">+</span>
      <span class="dettagli-in-aluminio-dti-sub-1"> Dettagli in aluminio</span>
    </p>
  </div>
  <p class="item-25-000--F9Q">25 000 €</p>
  <p class="item-9-000--YeJ">9 000 €</p>
  <div class="rectangle-11-dfk">
  </div>
  <div class="rectangle-12-KYa">
  </div>
  <a class="esterni-oyY" onclick="esterni()">Esterni</a>
  <a class="interni-i4v" onclick="interni()">Interni</a>
  <p class="prezzo-109-000-D1g">
    <span class="prezzo-109-000-D1g-sub-0">Prezzo:</span>
    <span class="prezzo-109-000-D1g-sub-1"> €109 000</span>
  </p>
  <img class="foto1-4-oEn" src="./assets/foto1-4.png" id="macchina"/>
</div>

<form action="pagina.php" method="POST">
  <label for="concessionaria">Seleziona una concessionaria:</label>
  <select id="concessionaria" name="concessionaria">
    <?php
    // Connessione al database
    $conn = mysqli_connect("localhost", "root", "", "dbvelocitaavanzata");

    // Verifica della connessione
    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }

    // Query SQL per selezionare le informazioni desiderate dalla tabella concessionaria
    $sql = "SELECT * FROM concessionaria";
    $result = mysqli_query($conn, $sql);

    // Verifica se sono presenti risultati
    if (mysqli_num_rows($result) > 0) {
        // Output dei dati di ogni riga
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['IdConcessionaria'] . "'>" . $row['indirizzo'] . ", " . $row['regione'] . ", " . $row['citta'] . "</option>";
        }
    } else {
        echo "Nessuna concessionaria trovata.";
    }

    // Chiudi la connessione al database
    mysqli_close($conn);
    ?>
  </select>
  <input type="submit" value="Procedi">
</form>

</body>
</html>