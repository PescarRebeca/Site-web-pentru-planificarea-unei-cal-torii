<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_VBbuciYSpXgHniGJSAbibwC66QnGWjg&callback=initMap" async defer>
     
 </script>
     <title>
    <?php
    // Numele aplicației
    $appName = "TripTrak";

    // Includeți fișierul de conexiune la baza de date
    include_once 'connection.php';
    
    // Verificați dacă a fost furnizată o țară prin metoda GET
    if(isset($_GET['destination'])) {
        $destination = $_GET['destination'];
        echo $appName . ' - ' . $destination;
    } else {
        echo $appName . ' - ' . "Informații despre țară";
    }
    ?>
</title>

    <!-- Includeți biblioteca Google Maps JavaScript API -->
   
    <style>
    
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

main {
    flex: 1; /* Face ca main să ocupe spațiul disponibil între header și footer */
    text-align: center;
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding-top: 70px; /* Adaugă un spațiu de sus echivalent cu înălțimea barei de navigare */
}

.nav-links .search-icon {
    display: inline-block; /* Afișează pictograma de căutare pe orice ecran */
    color: #ffc107;
    font-size: 24px;
    margin-right: 10px;
}

nav {
    position: fixed;
    z-index: 99;
    width: 100%;
    background: #242526;
    top: 0;
    margin: 0;
    padding: 0;
}

nav .wrapper {
    position: relative;
    max-width: 1300px;
    padding: 0px 30px;
    height: 70px;
    line-height: 70px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.wrapper .logo a {
    color: #f2f2f2;
    font-size: 30px;
    font-weight: 600;
    text-decoration: none;
}

.wrapper .nav-links {
    display: inline-flex;
    padding-right: 30px; /* Adaugă un spațiu suplimentar pentru a evita suprapunerea */
}

.nav-links li {
    list-style: none;
}

.nav-links li a {
    color: #f2f2f2;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 9px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.nav-links li a:hover {
    background: #3A3B3C;
}

.nav-links .mobile-item {
    display: none;
}

.nav-links .drop-menu {
    position: absolute;
    background: #242526;
    width: 180px;
    line-height: 45px;
    top: 85px;
    opacity: 0;
    visibility: hidden;
    box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}

.nav-links li:hover .drop-menu,
.nav-links li:hover .mega-box {
    transition: all 0.3s ease;
    top: 70px;
    opacity: 1;
    visibility: visible;
}

.drop-menu li a {
    width: 100%;
    display: block;
    padding: 0 0 0 15px;
    font-weight: 400;
    border-radius: 0px;
}

.mega-box {
    position: absolute;
    left: 0;
    width: 100%;
    padding: 0 30px;
    top: 85px;
    opacity: 0;
    visibility: hidden;
}

.mega-box .content {
    background: #242526;
    padding: 25px 20px;
    display: flex;
    width: 100%;
    justify-content: space-between;
    box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}

.mega-box .content .row {
    width: calc(25% - 30px);
    line-height: 45px;
}

.content .row img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.content .row header {
    color: #f2f2f2;
    font-size: 20px;
    font-weight: 500;
}

.content .row .mega-links {
    margin-left: -40px;
    border-left: 1px solid rgba(255,255,255,0.09);
}

.row .mega-links li {
    padding: 0 20px;
}

.row .mega-links li a {
    padding: 0px;
    padding: 0 20px;
    color: #d9d9d9;
    font-size: 17px;
    display: block;
}

.row .mega-links li a:hover {
    color: #f2f2f2;
}

.wrapper .btn {
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    display: none;
}

.wrapper .btn.close-btn {
    position: absolute;
    right: 30px;
    top: 10px;
}

@media screen and (max-width: 970px) {
    .wrapper .btn {
        display: block;
    }

    .wrapper .nav-links {
        position: fixed;
        height: 100vh;
        width: 100%;
        max-width: 350px;
        top: 0;
        left: -100%;
        background: #242526;
        display: block;
        padding: 50px 10px;
        line-height: 50px;
        overflow-y: auto;
        box-shadow: 0px 15px 15px rgba(0,0,0,0.18);
        transition: all 0.3s ease;
    }

    /* custom scroll bar */
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #242526;
    }

    ::-webkit-scrollbar-thumb {
        background: #3A3B3C;
    }

    #menu-btn:checked ~ .nav-links {
        left: 0%;
    }

    #menu-btn:checked ~ .btn.menu-btn {
        display: none;
    }

    #close-btn:checked ~ .btn.menu-btn {
        display: block;
    }

    .nav-links li {
        margin: 15px 10px;
    }

    .nav-links li a {
        padding: 0 20px;
        display: block;
        font-size: 20px;
    }

    .nav-links .drop-menu {
        position: static;
        opacity: 1;
        top: 65px;
        visibility: visible;
        padding-left: 20px;
        width: 100%;
        max-height: 0px;
        overflow: hidden;
        box-shadow: none;
        transition: all 0.3s ease;
    }

    #showDrop:checked ~ .drop-menu,
    #showMega:checked ~ .mega-box {
        max-height: 100%;
    }

    .nav-links .desktop-item {
        display: none;
    }

    .nav-links .mobile-item {
        display: block;
        color: #f2f2f2;
        font-size: 20px;
        font-weight: 500;
        padding-left: 20px;
        cursor: pointer;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .nav-links .mobile-item:hover {
        background: #3A3B3C;
    }

    .drop-menu li {
        margin: 0;
    }

    .drop-menu li a {
        border-radius: 5px;
        font-size: 18px;
    }

    .mega-box {
        position: static;
        top: 65px;
        opacity: 1;
        visibility: visible;
        padding: 0 20px;
        max-height: 0px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .mega-box .content {
        box-shadow: none;
        flex-direction: column;
        padding: 20px 20px 0 20px;
    }

    .mega-box .content .row {
        width: 100%;
        margin-bottom: 15px;
        border-top: 1px solid rgba(255,255,255,0.08);
    }

    .mega-box .content .row:nth-child(1),
    .mega-box .content .row:nth-child(2) {
        border-top: 0px;
    }

    .content .row .mega-links {
        border-left: 0px;
        padding-left: 15px;
    }

    .row .mega-links li {
        margin: 0;
    }

    .content .row header {
        font-size: 19px;
    }
}

nav input {
    display: none;
}

.body-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    text-align: center;
    padding: 0 30px;
}

.body-text div {
    font-size: 45px;
    font-weight: 600;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

main {
    text-align: center;
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding-top: 70px;
}

h1 {
    font-family: 'QuarterScript', sans-serif;
    font-size: 35px;
    line-height: 1.5;
    max-width: 1000px;
    margin: 0 auto;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    color: #333;
}

p {
    color: black;
    line-height: 1.6;
    text-align: left;
}

img {
    max-width: 100%;
    height: auto;
    margin-top: 20px;
}

.back-link {
    margin-top: 20px;
}

.back-link a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}

.back-link a:hover {
    text-decoration: underline;
}

.container2 {
    display: flex;
    width: 100%;
    margin: auto;
    z-index: 2;
}

.left-column {
    width: 50%;
    padding: 20px;
    overflow-y: auto; /* Permite derularea verticală */
    text-align: left;
    background-color: white;
    margin-top: 10px;
    max-height: calc(100vh - 150px); /* Limitarea la înălțimea disponibilă minus înălțimea barei de navigație și a footer-ului */
}

.right-column {
    flex: 1;
    padding: 20px;
}

/* Stiluri pentru butoanele din coloana din dreapta */
.right-column .button {
    background-color: #000; /* Culoare de fundal a butoanelor */
    color: #fff; /* Culore text butoane */
    border: none; /* Elimină bordura */
    border-radius: 5px; /* Rotunjirea marginilor */
    padding: 30px 70px; /* Spatiere interioara a butoanelor */
    margin-top: 10px; /* Spatiere intre butoane */
    cursor: pointer; /* Cursor pointer la interacțiune */
    display: inline-block; /* Așază butoanele unul lângă celălalt */
    font-size: 18px; /* Mărimea fontului */
}

.right-column .button:not(:last-child) {
    margin-right: 10px; /* Spațiere între butoane */
}

.right-column .button:hover {
    background-color: #0056b3; /* Culoare buton la hover */
}

/* Stiluri pentru iconița din interiorul butonului */
.right-column .button i {
    margin-right: 5px; /* Spațiere între iconiță și text */
}

.general-details {
    margin-bottom: 20px;
}

.submenu {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}

.submenu a,
button {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
    cursor: pointer;
    flex: 1;
    margin: 0 5px;
}

.submenu a:hover,
button:hover {
    background-color: #f4f4f4;
}

#map {
    width: 100%;
    height: 300px;
}

/* Stilizarea imaginii orașului */
.city-image {
    width: 1000px; /* Specificați dimensiunea dorită */
    height: 400px; /* Păstrați raportul de aspect pentru a evita distorsiunile */
    margin-top: 20px;
}

footer {
    background-color: black;
    padding: 20px 0;
    text-align: center;
    color: #fff;
    margin-top: auto; /* Se asigură că footer-ul se află la sfârșitul paginii */
}

.mini-footer {
    max-width: 1200px;
    margin: 0 auto;
}

.mini-footer p {
    margin: 0;
    color: #fff;
}

#video-background {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    z-index: -1; 
}

/* Stilizare formular */
.form-container {
    margin-top: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.form-container h3 {
    margin-bottom: 15px;
}

.form-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-container input,
.form-container textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-container button {
    background-color: #ffc107;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-container button:hover {
    background-color: black;
}

.form-container p2 {
    text-align: center; /* Aliniere text în mijloc */
    margin-bottom: 10px; /* Spațiere inferioară pentru separare */
}

/* Stiluri pentru ecrane mici */
@media screen and (max-width: 768px) {
    .container2 {
        flex-direction: column;
    }

    .left-column,
    .right-column {
        width: 100%;
        max-height: none; /* Elimină limitarea înălțimii */
    }

    .left-column {
        margin-top: 0; /* Elimină margin-top pentru ecrane mici */
    }

    .right-column .button {
        display: block; /* Așază butoanele unul sub altul */
        width: 100%; /* Butoanele să ocupe întreaga lățime */
        margin-right: 0; /* Elimină margin-right */
        margin-bottom: 10px; /* Adaugă spațiu între butoane */
    }
}


  #message-container {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border: 2px solid #ffc107;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    width: 50%; /* Crește lățimea */
    max-width: 600px; /* Adaugă o lățime maximă */
    z-index: 1001;
    text-align: center;
    display: none; /* Ascuns implicit */
}

#message-container.show {
    display: block; /* Afișează doar când are clasa 'show' */
}

#message-container p {
    margin: 0;
    font-size: 18px;
    color: #000;
}

#message-container .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
    color: #000;
}

#overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Fundal semi-transparent */
    z-index: 1000;
    display: none; /* Ascuns implicit */
}

#overlay.show {
    display: block; /* Afișează doar când are clasa 'show' */
}
    </style>
</head>
<body> 
   
<nav>
  <div class="wrapper">
    <div class="logo"><a href="index.php">TripTrak</a></div>
    <input type="radio" name="slider" id="menu-btn">
    <input type="radio" name="slider" id="close-btn">
    <ul class="nav-links">
      <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
      <li><a href="index.php"><i class="fas fa-search search-icon"></i>Căutare</a></li>
      <li><a href="pagina_citybreak.php">City Break</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php
        if(isset($_SESSION['usermail'])) {
          echo '<li class="user-dropdown">
                  <a href="profile.php">' . $_SESSION['usermail'] . '</a>
                  <ul class="drop-menu">
                    <li><a href="logout.php">Deconectare</a></li>
                  </ul>
                </li>';} else {
          echo '<li>
                  <a href="#" class="desktop-item">Conectare</a>
                  <input type="checkbox" id="showDrop">
                  <label for="showDrop" class="mobile-item">Conectare</a></label>
                  <ul class="drop-menu">
                    <li><a href="login.php">Admin</a></li>
                    <li><a href="login_form.php">Utilizator</a></li>
                  </ul>
                </li>';}?>
    </ul>
    <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
  </div>
</nav>
 <video id="video-background" autoplay muted loop>
        <source src="videobackgroundprincipala.mp4" type="video/mp4">
        <!-- Adaugă și alte formate video compatibile cu browserele -->
        <!-- <source src="nume_fisier_video.webm" type="video/webm"> -->
        <!-- <source src="nume_fisier_video.ogv" type="video/ogg"> -->
        Your browser does not support the video tag.
    </video>
<main>
    
<div class="container2">
    <div class="left-column"id="leftColumn">
        <div class="general-details">
            <h2>
                <?php
                if(isset($_GET['destination'])) {
                    echo $_GET['destination'];
                } else {
                    echo "Informații despre destinatie";
                }
                ?>
            </h2>
      

            <!-- Conținutul pentru "Despre" -->
            <div id="aboutContent" class="content" style="display: none;">
<?php
// Include the database connection file
include_once 'connection.php';

// Check if city name is provided via GET method
if(isset($_GET['destination'])) {
    $destination = $_GET['destination'];
    
    // Query to get city details from the database
    $sql = "SELECT * FROM destinatii WHERE nume_destinatie = '$destination'";
    $result = $conn->query($sql);

    // Check if results are found
    if ($result->num_rows > 0) {
        // Display city details
        while($row = $result->fetch_assoc()) {
            echo "<script>var destinationCoordinates = { lat: " . $row["latitudine"] . ", lng: " . $row["longitudine"] . " };</script>";
            echo "<img src='" . $row["imagine"] . "' style='width:auto;height:auto;'>";
           
            // Display the 'despre' column with preserved newlines
            echo "<div>";
            echo nl2br(htmlspecialchars($row["despre"]));
            echo "</div>";
        }
    } else {
        echo "Nu s-au găsit rezultate.";
    }
}

?>

              
            </div>
              
            </div>
        </div>
    
    
    <div class="right-column">

        <div id="map"></div> <!-- Div-ul pentru a găzdui harta -->

   
<div class="form-container">
 <?php
  
    $usermail = isset($_SESSION['usermail']) ? $_SESSION['usermail'] : null;
    ?>
   <h3>Prețul intrării</h3>
<?php
// Includeți fișierul de conexiune la baza de date
// Includeți fișierul de conexiune la baza de date
include_once 'connection.php';

// Verificați dacă a fost furnizată o țară prin metoda GET
if (isset($_GET['destination'])) {
    $destination = $_GET['destination'];

    // Interogați baza de date pentru a obține prețul
    $sql = "SELECT pret FROM destinatii WHERE nume_destinatie = '$destination'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pret = $row['pret'];

        // Verificați dacă prețul este "Gratuit"; dacă nu, afișați prețul și formularul
        if ($pret != 'Gratuit') {
             echo "<p2>" . $row["pret"] . "LEI</p2>";

            echo "<form action='submit_intrari.php' method='POST'>";
            echo "<label for='fullName'>Nume complet:</label>";
            echo "<input type='text' id='fullName' name='fullName' required>";
            echo "<label for='entryDate'>Data intrării:</label>";
            echo "<input type='date' id='entryDate' name='entryDate' required>";
            echo "<label for='entryTime'>Ora:</label>";
            echo "<input type='time' id='entryTime' name='entryTime' required>";
            echo "<label for='phone'>Telefon:</label>";
            echo "<input type='tel' id='phone' name='phone' required>";
            echo "<label for='email'>Email:</label>";
            echo "<input type='email' id='email' name='email' required>";
            echo "<input type='hidden' name='usermail' value='" . htmlspecialchars($usermail) . "'>";
            echo "<button type='submit'>Trimite</button>";
            echo "</form>";
        } else {
            // Dacă prețul este "Gratuit", afișați doar mesajul, fără formular
            echo "<p>Accesul este Gratuit.</p>";
        }
    } else {
        echo "Nu s-au găsit rezultate pentru destinația selectată.";
    }
}
$conn->close();
?>








</div>
</div>

<div id="message-container" class="<?php if (isset($_SESSION['message'])) echo 'show'; ?>">
    <?php
    if (isset($_SESSION['message'])) {
        echo '<button class="close-btn" onclick="closeMessage()">&times;</button>';
        echo '<p>' . $_SESSION['message'] . '</p>';
        unset($_SESSION['message']);
    }
    ?>
</div>


<script>
    
  function initMap() {
    // Opțiuni pentru harta
    var mapOptions = {
        zoom: 12, // Ajustați nivelul de zoom la necesitate
        center: destinationCoordinates // Coordonatele țării
    };
    // Inițializarea hărții
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    // Adăugarea unui marcator pentru țara specificată
    var marker = new google.maps.Marker({
        position: destinationCoordinates,
        map: map,
        title: '<?php echo $destination; ?>' // Numele țării
    });
}

        // Funcție pentru afișarea conținutului asociat opțiunilor din submeniu
        function showContent(contentId) {
            var contents = document.querySelectorAll('.content');
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = 'none';
            }
            document.getElementById(contentId).style.display = 'block';
        }

        // Adăugarea unui eveniment de clic pentru opțiunile din submeniu
        var submenuItems = document.querySelectorAll('.submenu-item');
        for (var i = 0; i < submenuItems.length; i++) {
            submenuItems[i].addEventListener('click', function() {
                var contentId = this.getAttribute('data-content');
                showContent(contentId);
            });
        }
   function showAboutContent() {
        var aboutContent = document.getElementById('aboutContent');
        aboutContent.style.display = 'block';
    }

    // Apelați funcția pentru afișarea conținutului "Despre" când pagina este încărcată complet
    window.onload = function() {
        showAboutContent();
    };
        
  

function closeMessage() {
    document.getElementById('message-container').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

$(document).ready(function() {
    $('#favoriteForm').submit(function(event) {
        event.preventDefault(); // Previi trimiterea clasică a formularului

        $.ajax({
            type: 'POST',
            url: 'adauga_in_favorite.php',
            data: $(this).serialize(),
            success: function(response) {
                $('#message').html(response); // Afișează răspunsul în div-ul cu id-ul message
                $('#message').addClass('show'); // Adaugă clasa pentru a face mesajul vizibil

                // După 5 secunde, elimină clasa pentru a face mesajul invizibil
                setTimeout(function() {
                    $('#message').removeClass('show');
                }, 5000); // 5 secunde
            }
        });
    });
});
</script>
</main>
<footer>
<div class="mini-footer">
    <p>&copy; 2024 TripTrak. Toate drepturile rezervate.</p>
</div>

</footer>

</body>
</html>

