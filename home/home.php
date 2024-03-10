<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
  <link rel="stylesheet" href="./styles/home.css"/>
  <script src="javascript.js"></script>
  
</head>
<body>
<div class="home-wnn">
  <div class="header-ZpA">
    <div class="logo-wrapper-3WN">
      <a class="italian-g3Y" href="../testDrive/drive.php" >Prenota un test drive</a>
      <img class="line-1-hzE" src="./assets/line-1.png"/>
      
      <img class="screenshot-2024-02-23-alle-0822-1-uaW" src="./assets/screenshot-2024-02-23-alle-0822-1.png"/>
     
      
      <div class="login-PnW" id="logged-in-user">
      <?php

        session_start();

        // Gestione del logout se il parametro "logout" è presente nell'URL
        if(isset($_GET['logout'])) {
            // Elimina tutte le variabili di sessione
            session_unset();
            // Distruggi la sessione
            session_destroy();
            // Reindirizza alla pagina corrente
            header("Location: ".$_SERVER['PHP_SELF']);
            exit; // Assicura che lo script termini qui dopo il reindirizzamento
        }

        // Mostra il nome utente e il link di logout solo se l'utente è autenticato
        if(isset($_SESSION['username'])) {
            echo '<div class="welcome-message">'.$_SESSION['username'].'</div>';
            echo '<a class="galleria" href="../login/galleria.php">Galleria</a>';
            echo '<a class="logout-link" href="?logout">Logout</a>';
        }
        else {
            echo '
                <div class="login-PnW" onclick="(Redirect(\'../login/group-1.php\'))">Login</div>
                <div style="padding-left:20%;" class="login-PnW" onclick="(Redirect(\'../login/group-2.html\'))">Registrati</div>
            ';
        }
      ?>
   </div>
    </div>
    <div class="navigation-6qL">
      <div class="history-1SW" onclick="scorri('storia')">Storia</div>
      <div class="sustainability-W8N" onclick="scorri('sostenibilita')">Sostenibilità</div>
      <div class="design-DYa" onclick="scorri('design')">Design</div>
      <div class="innovation-jWv" onclick="scorri('innovazione')">Innovazione</div>
    </div>
  </div>
  <div class="auto-group-sxpx-TC2">
    <div class="rectangle-1-nEJ">
    </div>
    <img class="meser-GfG" src="./assets/image.png"/>
    <div class="foto1-1-oQJ">
    </div>
    <img class="mask-group-U94" src="./assets/mask-group.png"/>
    <img class="mask-group-2-zNJ" src="./assets/mask-group-2.png"/>
    <div class="caption-tTg">
      <div class="scopri-la-potenza-meser-c8n">Scopri la potenza Meser.</div>
      <div class="frame-5-75Y">
        <a class="configura-B5Q" href="../personalizza/first-page.php">Configura</a>
        <img class="chevron-right-HeE" src="./assets/chevron-right.png"/>
      </div>
    </div>
    <div class="fotor-2024022491830-1-PSN">
    </div>
    <div class="rectangle-4-rqk">
    </div>
    <div  id="storia" class="storia-y9g">Storia</div>
    <div class="storia-testoesterno1">
      <div class="storia-testointernotitolo1">Fondazione e Innovazione</div>
      <div>Nel 2005, Carlo Bianchi e un gruppo di appassionati fondarono Velocità Avanzata con l&#39;obiettivo di creare automobili sportive all&#39;avanguardia. </div>
    </div>
   
    <div style="margin-top: 18%;" class="storia-testoesterno1">
      <div class="storia-testointernotitolo1">Dominio in Pista</div>
      <div>Le vetture di Velocità Avanzata dominarono le competizioni automobilistiche, conquistando titoli in campionati GT, endurance e rally. </div>
    </div>
  </div>
  <div class="auto-group-uapy-yFU">
    <div  id="sostenibilita" class="sostenibilit-H1G">Sostenibilità</div>
    <div class="primo-paragrafo">In Velocità Avanzata, la sostenibilità è un impegno fondamentale per il nostro futuro. Ci concentriamo su tre pilastri: ambiente, sociale ed economia.</div>
    <div class="auto-group-npyt-MvE">
      <div class="auto-group-tb3k-VmY">
        <div class="nuovo-motore-full-electric-2Fg">Nuovo motore full-electric</div>
        <div class="secondo-paragrafo">
        La nostra nuova autovettura è dotata di un motore elettrico all&#39;avanguardia che offre prestazioni elevate e un&#39;esperienza di guida fluida e silenziosa. 
        </div>
      </div>
      <div>
        <div class="dal2018">Dal 2018 riduciamo i consumi</div>
        <br><br><br>
        <div class="dal2018paragrafo">Ci impegniamo a ridurre l&#39;impatto ambientale della nostra produzione. Le nostre fabbriche sono progettate per minimizzare i consumi energetici e le emissioni.</div>
      </div>
    </div>
  </div>
  <div class="auto-group-r2kg-arr">
    <div id="design" class="design-5oc">Design</div>
    <div class="un-nuovo-design-ridefinito-e-migliorato-che-trascende-gli-standard-moderni-per-le-autovetture-Bbk">Un nuovo design ridefinito e migliorato, che  trascende gli standard moderni per le autovetture</div>
    <img class="foto2-removebg-1-2cN" src="./assets/foto2-removebg-1.png"/>
  </div>
  <div id="innovazione" class="innovazione-Y4v">Innovazione</div>
  <div class="auto-group-i2ei-f9Y">
    <div class="auto-group-l7rw-xeS">
      <div class="paragrafo-connettivita">
        <div class="connettivita">Connettività</div>
        <br>
        <div class="connettivita-testo">La nostra autovettura è dotata di sistemi di connettività avanzati che ti permettono di rimanere sempre connesso e di avere accesso a un&#39;ampia gamma di servizi in tempo reale.</div>
      
        
        <div style="padding-top: 9%;" class="guida-autonoma">Guida Autonoma</div>
        <br>
        <div class="guida-autonoma-testo">Le nuove tecnologie di guida autonoma, in collaborazione con Tesla, garantiscono comfort e sicurezza per i lunghi tragitti.</div>
      

        <div style="padding-top: 9%;" class="interfaccia">Interfaccia intuitiva</div>
        <br>
        <div class="interfaccia-testo">Per un’esprienza di guida semplice e senza distrazioni</div>
      </div>
    </div>
  </div>
  <div class="line-3-H1p">
  </div>
  <div class="footer">
    <table class="footer-table">
        <tr>
            <td class="social">
                <div class="footer-heading">Socials</div>
                <img class="social-icon" src="./assets/youtube.png"/>
                <img class="social-icon" src="./assets/facebook.png"/>
                <img class="social-icon" src="./assets/instagram.png"/>
            </td>
            <td style="padding-left: 5%;" class="contatti">
                <div class="footer-heading">Contatti</div>
                <div class="contatti-info">
                    <div>velocitaavanzata.customers@gmail.com</div>
                    <div>0444123456789</div>
                </div>
            </td>
            <td class="privacy">
                <div class="footer-heading">Privacy</div>
                <div class="privacy-info">Scopri come utilizziamo i tuoi dati <br>per migliorare i nostri servizi</div>
            </td>
        </tr>
    </table>
</div>



</div>
</body>
</html>
