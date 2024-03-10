<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Group 1</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish%3A300%2C400%2C500%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro%3A700"/>
  <link rel="stylesheet" href="./styles/group-1.css"/>
  <script src="../home/javascript.js"></script>

</head>
<body>
<div class="group-1-B8A">
  <div class="frame-8-LFx">
    <div class="rectangle-6-Ud4">
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
        echo "<div style='color: red; text-align: center; padding-top:81.5%; font-family: Mulish, Source Sans Pro;'><p><strong>Utente o password errati</strong></p></div>";

    }
    if (isset($_GET['error2']) && $_GET['error2'] == 'invalid') {
      echo "<div style='color: red; text-align: center; padding-top:81.5%; font-family: Mulish, Source Sans Pro;'><p><strong>Compila entrambi i campi</strong></p></div>";
    }
    ?>
   <div style='text-align: center; padding-top:80%;'>
      <label style='color: red; text-align: center; padding-top:80%; font-family: Mulish, Source Sans Pro;'>Ricordami</label>
      <input  type='checkbox' name='ricordami'>
    </div>
    </div>
    
     
    <p class="new-member-register-now-zbQ">
      <span class="new-member-register-now-zbQ-sub-0">New Member?</span>
      <span class="new-member-register-now-zbQ-sub-1"> </span>
      <a class="new-member-register-now-zbQ-sub-2" href="group-2.html">Register now</a>
    </p>
    <p class="welcome-back-j58">Welcome back</p>
    <p class="sign-in-to-access-your-account-qP4">sign in to access your account</p>
    <form id="login" action="login.php" method="post" >
        <div class="rectangle-8-jjL">
          <input type="text" placeholder="Username" maxlength="20" name="user">
        </div>
        <div class="rectangle-5-UKY">
          <input type="password" placeholder="Password" maxlength="20" name="psw">
        </div>
        <div class="frame-6-2VU">
          <input type="submit" value="Accedi" class="configura-uJN">
          <img class="chevron-right-ouY" src="./assets/chevron-right-Fjk.png"/>
        </div>
    </form>
    <a href="../home/home.php">    
      <img class="screenshot-2024-02-23-alle-0822-2-vDU" src="./assets/screenshot-2024-02-23-alle-0822-2.png"/>
    </a>
   
</div>
</body>
</html>