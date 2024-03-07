<?php
// Avvia la sessione
session_start();
?>
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
  <link rel="stylesheet" href="./styles/first-page.css"/>
  <script src="JSPag1.js"></script>
</head>
<body onload="passaElementoSuccessivoM()">
<div class="first-page-3kr">
  <div class="rectangle-3-gJ2">
  </div>
  <p class="price-69-000-HYi">
    <span class="price-69-000-HYi-sub-0">Price:</span>
    <span class="price-69-000-HYi-sub-1"> 69000</span>
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
  <p class="velocit-avanzata-meser-P3L">
    <span class="velocit-avanzata-meser-P3L-sub-0">VELOCITÀ AVANZATA </span>
    <span class="velocit-avanzata-meser-P3L-sub-1">Meser</span>
  </p>
  <div id="informazioni">
  </div>
  <div id="informazioni2">
  </div>
  <button onclick="passaElementoSuccessivoM()" id="button1">Successivo</button>
  <button onclick="passaElementoPrecedenteM()" id="button2">Precedente</button>

  <button onclick="passaElementoSuccessivoP()" id="button3">Successivo</button>
  <button onclick="passaElementoPrecedenteP()" id="button4">Precedente</button>
  <p class="select-motore-Czz">Select motore</p>
  <a class="select-pacchetto-X1g">Select pacchetto</a>
  <a class="procedi-1hY">PROCEDI</a> <!---->
  <img class="foto1-2-ikN" src="./assets/foto1-4.png"/>  
</div>
</body>
</html>