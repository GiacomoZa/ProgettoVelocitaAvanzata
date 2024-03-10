<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenota un Test Drive</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro%3A400%2C600%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
    <link rel="stylesheet" href="./styles/drive.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <style>
        .leaflet-control-geocoder-icon {
            border: none; 
        }
    </style>
</head>
<body>
    <div class="reservation-page">
    <header class="header">
    <div class="logo">
    <a  href="../home/home.php">
        <img src="assets/logo.png" alt="Logo">
    </a>
    </div>
    <h1>Prenota un Test Drive</h1>
</header>
    <main class="main">
        <section class="reservation-form">
        <div class="user-info">
            </div>
            <form action="Processotest-drive.php" method="post" onsubmit="return validateForm()" >
                <input type="hidden" name="idUser" value="<?php echo $_SESSION['idUtente']; ?>">
                <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="date">Data preferita:</label>
                    <input type="date" id="date" name="date" required>
                    
                    <label for="concessionario">Concessionario:</label>
                    <select id="concessionaria" name="concessionaria" class="custom-select">
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
                      <div id="map" style="height: 300px; margin: 10px;"></div>
                    <button type="submit">Prenota</button>
                </form>
            </section>
        </main>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var date = document.getElementById("date").value;
            var currentDate = new Date().toISOString().split('T')[0]; // Ottieni la data corrente nel formato "YYYY-MM-DD"

            if (!validateEmail(email)) {
                alert("Inserisci un'email valida.");
                return false;
            }

            if (date < currentDate) {
                alert("La data deve essere uguale o successiva alla data odierna.");
                return false;
            }

            return true;
        }

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/; // - Uno o più caratteri non spazio prima del simbolo '@'.
                                    // - Il simbolo '@'.
                                    // - Uno o più caratteri non spazio dopo il simbolo '@'.
                                    // - Il simbolo '.' (punto).
                                    // - Uno o più caratteri non spazio dopo il punto.
            return re.test(email);
        }
        function initMap() {
        // Inizializza la mappa sull'Italia
        var map = L.map('map').setView([41.8719, 12.5674], 6); // Centra la mappa sull'Italia (latitudine e longitudine) con livello di zoom 6

        // Aggiungi un layer della mappa (OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Aggiungi il controllo di geocoding per la ricerca degli indirizzi
        L.Control.geocoder().addTo(map);
    }

    // Esegui la funzione initMap() quando la pagina è completamente caricata
    document.addEventListener('DOMContentLoaded', initMap);;
    </script>
</body>

</html>
