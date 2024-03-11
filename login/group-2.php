<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Group 2</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish%3A300%2C400%2C500%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro%3A700"/>
  <link rel="stylesheet" href="./styles/group-2.css"/>
</head>
<body>
<div class="group-2-k9t">
  <div class="frame-9-JSJ">
    <div class="rectangle-7-eFG">
    <?php
      if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
        echo "<div style='color: red; text-align: center; padding-top:82.5%; font-family: Mulish, Source Sans Pro;'><p><strong>Utente già presente.</strong></p></div>";

    }if (isset($_GET['error2']) && $_GET['error2'] == 'invalid') {
      echo "<div style='color: red; text-align: center; padding-top:82.5%; font-family: Mulish, Source Sans Pro;'><p><strong>Compila tutti i campi</strong></p></div>";

  }
      ?>

    </div>
    <p class="already-a-member-log-in-y2e">
      <span class="already-a-member-log-in-y2e-sub-0">Already a member?</span>
      <span class="already-a-member-log-in-y2e-sub-1"> </span>
      <a class="already-a-member-log-in-y2e-sub-2" href="group-1.php">Log In</a>
    </p>
    <div class="frame-7-iwG">
      <div class="configura-R4z" onclick="document.getElementById('registrazione').submit()">Avanti</div>
      <img class="chevron-right-v1k" src="./assets/chevron-right-Qte.png"/>
    </div>
    <a href="../home/home.php">
      <img class="screenshot-2024-02-23-alle-0822-3-RjC" src="./assets/screenshot-2024-02-23-alle-0822-3.png"/>
    </a>
    <p class="get-started-LbG">Get Started</p>
    <p class="by-creating-a-free-account-qnv">by creating a free account.</p>
    <form id="registrazione" action="registrazione.php" method="post">
    <div class="input--user">
      <input type="text" placeholder="Username" maxlength="20" name="user">
    </div>
    <div class="input--DBC">
      <input type="password" placeholder="Password" maxlength="20" name="psw">
    </div>
    <div class="input--x2J">      
      <input type="text" placeholder="Nome" maxlength="20" name="nome">
    </div>
    <div class="input--fqp">
      <input type="text" placeholder="Cognome" maxlength="20" name="cognome">
    </div>
  </form>
  </div>
</div>
</body>