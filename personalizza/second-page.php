<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>First page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500"/>
  <link rel="stylesheet" href="./styles/second-page.css"/>
  <script src="./JSPag2.js"></script>
</head>
<body>
<div class="first-page-3kr">
  <div class="rectangle-3-gJ2">
  </div>
  <p class="price-69-000-HYi">
    <span class="price-69-000-HYi-sub-0">Price:</span>
    <span class="price-69-000-HYi-sub-1"> €69 000</span>   <!--da modificare in base all'opzional-->
  </p>
  <div class="rectangle-1-AW2">
  </div>
  <div class="rectangle-2-3pi">
  </div>
  <div class="rectangle-4-wv6">
  </div>
  <div class="rectangle-5-FQz">
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
  <img id="MRed" class="MetallicRed" src="./assets/MetallicRed.jpg" alt="MetallicRed" onclick="salvaColore('1')">
  <img id="MBlu" class="MetallicBlue" src="./assets/MetallicBlue.jpg" alt="MetallicBlue" onclick="salvaColore('2')">
  <img id="MBlack" class="MetallicBlack" src="./assets/MetallicBlack.png" alt="MetallicBlack" onclick="salvaColore('3')">
  <img id="PWhite" class="PearlWhite" src="./assets/PearlWhite.png" alt="PearlWhite" onclick="salvaColore('4')">
  <p class="cerchi-9Cr">Cerchi</p>  <!--un cerchio=cerchi in lega, l'altro no-->
  <img id="cerchio1" class="GreyWheels" src="./assets/GreyWheels.png" alt="GreyWheels" onclick="salvaCerchio('1')">
  <img id="cerchio2" class="BlackWheels" src="./assets/BlackWheels.png" alt="BlackWheels" onclick="salvaCerchio('0')">
  <p class="select-colore-Czz">Select colore</p>
  <p class="select-cerchi-X1g">Select cerchi</p>
  <form id="formData" method="post" action="third-page.php">
    <input type="hidden" id="coloreSelezionato" name="colore">
    <input type="hidden" id="cerchioSelezionato" name="cerchio">
  </form>
  <a class="procedi-1hY" href="#" onclick="salvaDati()">PROCEDI</a>
  <a class="esterni-KCS" onclick="esterni()">Esterni</a>
  <a class="interni-Qjg" onclick="interni()">Interni</a>
  <img id="macchina" class="foto1-2-ikN" src="./assets/foto1-4.png"/>
</div>
<script>
  var coloreSelezionato = null;
  var cerchioSelezionato = null;

  function salvaColore(id) {
    coloreSelezionato = id;
  }

  function salvaCerchio(id) {
    cerchioSelezionato = id;
  }

  function salvaDati() {
    document.getElementById('coloreSelezionato').value = coloreSelezionato;
    document.getElementById('cerchioSelezionato').value = cerchioSelezionato;
    document.getElementById('formData').submit();
  }
</script>
</body>
</html>