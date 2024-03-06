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
  <link rel="stylesheet" href="./styles/third-page.css"/>
  <script src="./JSPag3.js"></script>
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
  <p class="tappezzeria-T58">Tappezzeria</p>
  <img class="pelleNera" src="./assets/blackLeather.png" alt="pelleNera" id="LBlack">
  <img class="pelleMarrone" src="./assets/brownLeather.png" alt="pelleMarrone" id="LBrown">
  <p class="dettagli-9Cr">Dettagli</p>
  <img class="aluminium" src="./assets/aluminium.png" alt="Aluminium" id="dettagli1">
  <img class="carbonFiber" src="./assets/carbonFiber.png" alt="carbonFiber" id="dettagli2">
  <p class="select-tappezzeria-Czz">Select tappezzeria</p>
  <p class="select-dettagli-X1g">Select dettagli</p>
  <a class="procedi-1hY" href="summary.html">PROCEDI</a>
  <a class="esterni-KCS" onclick="esterni()">Esterni</a>
  <a class="interni-Qjg" onclick="interni()">Interni</a>
  <img class="foto1-2-ikN" src="./assets/interniNeri.jpeg" id="macchina"/>
</div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["colore"])) {
        $coloreSelezionato = $_POST["colore"];
        
    }
    
    
    if (isset($_POST["cerchio"])) {
        $cerchioSelezionato = $_POST["cerchio"];
        
    }
}
?>