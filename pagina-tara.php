<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Alte etichete meta și titlu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <title>
    <?php
    // Numele aplicației
    $appName = "TripTrak";

    // Includeți fișierul de conexiune la baza de date
    include_once 'connection.php';
    
    // Verificați dacă a fost furnizată o țară prin metoda GET
    if(isset($_GET['country'])) {
        $country = $_GET['country'];
        echo $appName . ' - ' . $country;
    } else {
        echo $appName . ' - ' . "Informații despre țară";
    }
    ?>
</title>

    <!-- Includeți biblioteca Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_VBbuciYSpXgHniGJSAbibwC66QnGWjg&callback=initMap" async defer></script>
    <style>
       .nav-links .search-icon {
    display: inline-block; /* Afișează pictograma de căutare pe orice ecran */
    color: #ffc107;
    font-size: 24px;
    margin-right: 10px;
}
 
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}     /* Stiluri CSS generale */
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

/* Stiluri pentru navigare */
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
        font-size: 20px}
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

h1 {
    font-family: 'QuarterScript', sans-serif;
    font-size: 35px;
    line-height: 1.5;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    color: #333;
}

p {
    color: #666;
    line-height: 1.6;
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
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    z-index: 2;
    overflow-y: auto; /* Permiteti derularea cand continutul depaseste inaltimea containerului */
    max-height: 80vh; /* Limitati inaltimea containerului pentru a permite derularea */
    position: relative; /* Asigurați-vă că săgeata este poziționată relativ la acest div */
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
    background-color: #ffc107; /* Culoare buton la hover */
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
    background-color: #ffc107;
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

.more-details-button {
    display: inline-block; /* Faceți ca butonul să se afișeze ca un bloc */
    padding: 10px 20px; /* Adaugă spațiu interior butonului */
    margin-top: 10px; /* Adaugă un spațiu între buton și text */
    background-color: black; /* Culorile butonului */
    color: #fff; /* Culorile textului butonului */
    border: none; /* Elimină orice bordură */
    border-radius: 5px; /* Adaugă margini rotunjite */
    text-decoration: none; /* Elimină sublinierea */
    transition: background-color 0.3s ease; /* Efect de tranziție pentru culorile butonului */
    font-size: 16px; /* Mărește dimensiunea fontului */
    font-weight: bold; /* Faceți textul îngroșat */
    cursor: pointer; /* Schimbă cursorul la pointer la interacțiunea cu butonul */
}

.more-details-button:hover {
    background-color: #ffc107; /* Schimbă culoarea butonului la interacțiunea cu cursorul */
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

.left-column {
    position: relative; /* Asigurați-vă că săgeata este poziționată relativ la acest div */
}

.back-to-top {
    display: none;
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: #333;
    color: #fff;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    font-size: 24px;
    border-radius: 50%;
    text-decoration: none;
    transition: opacity 0.4s ease-in-out;
}

.left-column:hover .back-to-top {
    display: block;
}

/* Stiluri media queries pentru diverse dimensiuni de ecran */
@media screen and (max-width: 1200px) {
    .city-image {
        width: 800px;
        height: 320px;
    }
}

@media screen and (max-width: 992px) {
    .city-image {
        width: 600px;
        height: 240px;
    }
}

@media screen and (max-width: 768px) {
    .container2 {
        flex-direction: column;
    }

    .left-column,
    .right-column {
        width: 100%;
    }

    .city-image {
        width: 400px;
        height: 160px;
    }
}

@media screen and (max-width: 576px) {
    .city-image {
        width: 100%;
        height: auto;
    }

    .right-column .button {
        padding: 20px 50px;
        font-size: 16px;
    }
}
.favorite-form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .favorite-form button {
            background-color: #ffc107;
            border: none;
            color: white;
            padding: 8px 15px;
            font-size: 14px;
            border-radius: 5px 5px 0 0;
            position: relative;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .favorite-form button::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 6px solid #ffc107;
        }

        .favorite-form button:hover {
            background-color: black;
        }

        .favorite-form button:focus {
            outline: none;
        }
        #message {
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.5s linear;
}

#message.show {
    visibility: visible;
    opacity: 1;
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
<main>
    
<div class="container2">
    <div class="left-column"id="leftColumn">
        <div class="general-details">
            <h2>
                <?php
                if(isset($_GET['country'])) {
                    echo $_GET['country'];
                } else {
                    echo "Informații despre țară";
                }
                ?>
   <form method="post" action="adauga_in_favorite.php" class="favorite-form" id="favoriteForm">
    <!-- Câmpul ascuns pentru tipul de informație -->
    <input type="hidden" name="type" value="country">
    <!-- Câmpul ascuns pentru oraș -->
    <input type="hidden" name="name" value="<?php echo htmlspecialchars($country); ?>">
    <!-- Butonul pentru adăugare în favorite -->
    <button type="submit" name="add_to_favorites">Adaugă <?php echo htmlspecialchars($country); ?> în Favorite</button>
</form>
<div id="message"></div>

            </h2>
            <div class="submenu">
    <a href="#" class="submenu-item" data-content="aboutContent">Despre</a>
    <a href="#" class="submenu-item" data-content="citiesContent">Orașe</a>
    <a href="#" class="submenu-item" data-content="topDestinationsContent">Top Destinații</a>
 
</div>
<div id="topDestinationsContent" class="content" style="display: none;">
    <?php
    // Includeți fișierul de conexiune la baza de date
    include_once 'connection.php';
    // Verificați dacă a fost furnizată o țară prin metoda GET
    if(isset($_GET['country'])) {
        $country = $_GET['country'];
        // Interogare pentru a obține informațiile despre destinațiile din țara specificată din baza de date
        $sql = "SELECT * FROM destinatii WHERE tara = '$country'";
        $result = $conn->query($sql);
        // Verificați dacă s-au găsit rezultate
        if ($result->num_rows > 0) {
            // Afisam informatiile despre destinații
            while($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<h3>" . $row["nume_destinatie"] . "</h3>";
                echo "<img src='" . $row["imagine"] . "' alt='" . $row["nume_destinatie"] . "' class='city-image'>";
                echo "<p>" . $row["descriere"] . "</p>";
                echo "<a href='destinatii.php?destination=" . urlencode($row["nume_destinatie"]) . "' class='more-details-button'>Mai multe detalii</a>";

                echo "</div>";

            }
        } else {
            echo "Nu s-au găsit informații despre destinațiile din această țară în baza de date.";
        }
    } else {
        echo "Nu a fost furnizată nicio țară.";
    }
    ?>

</div>


 <!-- HTML -->
<!-- Conținutul pentru "Orase" -->
<div id="citiesContent" class="content" style="display: none;">
    <?php
    // Includeți fișierul de conexiune la baza de date
    include_once 'connection.php';
    // Verificați dacă a fost furnizată o țară prin metoda GET
    if(isset($_GET['country'])) {
        $country = $_GET['country'];
        // Interogare pentru a extrage informațiile despre orașele din țara specificată din baza de date
        $sql = "SELECT * FROM orase WHERE tara = '$country'";
        $result = $conn->query($sql);
        // Verificați dacă s-au găsit rezultate
        if ($result->num_rows > 0) {
            // Afisam informatiile despre orase
            while($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<h3>" . $row["nume"] . "</h3>";
                echo "<img src='" . $row["imagine"] . "' alt='" . $row["nume"] . "' class='city-image'>"; // Stilizează această imagine mai târziu
                echo "<p>" . $row["descriere"] . "</p>";
                echo "<a href='orase.php?city=" . urlencode($row["nume"]) . "' class='more-details-button'>Mai multe detalii</a>";
                echo "</div>";
            }
        } else {
            echo "Nu s-au găsit informații despre orașele din această țară în baza de date.";
        }
    } else {
        echo "Nu a fost furnizată nicio țară.";
    }
    ?>
  
</div>



<!-- CSS -->
<style>
    /* Alte stiluri CSS */

    /* Stiluri pentru butoanele orașelor */
    .city-button {
        border: none;
        background-size: cover; /* Asigură că imaginea acoperă întreaga suprafață a butonului */
        width: 200px; /* Setează lățimea butonului */
        height: 200px; /* Setează înălțimea butonului */
        cursor: pointer;
    }

    /* Alte stiluri CSS */
</style>

            <!-- Conținutul pentru "Despre" -->
            <div id="aboutContent" class="content" style="display: none;">
 <?php
    // Includeți fișierul de conexiune la baza de date
    include_once 'connection.php';
    // Verificați dacă a fost furnizată o țară prin metoda GET
    if(isset($_GET['country'])) {
        $country = $_GET['country'];
        // Interogare pentru a extrage informațiile despre țara specificată din baza de date
        $sql = "SELECT * FROM tari WHERE nume = '$country'";
        $result = $conn->query($sql);
        // Verificați dacă s-au găsit rezultate
        if ($result->num_rows > 0) {
            // Extrageți și afișați informațiile despre țară
            while($row = $result->fetch_assoc()) {
                // Eliminăm afișarea numelui țării aici
                // echo "<h1>" . $row["nume"] . "</h1>";
                echo "<img src='" . $row["imagine"] . "' alt='" . $row["nume"] . "' class='city-image'>"; 
                echo "<p><strong></strong> " . $row["descriere"] . "</p>";
                echo "<p><strong>Istorie:</strong> " . $row["istoric"] . "</p>";
                echo "<p><strong>Relief:</strong> " . $row["relief"] . "</p>";
                echo "<p><strong>Climă:</strong> " . $row["clima"] . "</p>";
               
                
                // Setare coordonatele geografice ale țării pentru harta
                echo "<script>var countryCoordinates = { lat: " . $row["latitudine"] . ", lng: " . $row["longitudine"] . " };</script>";
            }
        } else {
            echo "Nu s-au găsit informații despre această țară în baza de date.";
        }
    } else {
        echo "Nu a fost furnizată nicio țară.";
    }

    // Închideți conexiunea la baza de date
    $conn->close();
    ?>
              
            </div>
          
            
        </div>
    </div>
    
    <div class="right-column">
        <div id="map"></div> <!-- Div-ul pentru a găzdui harta -->
 
 <!-- HTML pentru butoanele cu text și iconiță -->
<button class="button" id="bookCitiesButton" onclick="redirectToBookings()">
    <i class="fas fa-hotel"></i> Rezervă hoteluri
</button>

<button class="button" id="searchFlightsButton" onclick="redirectToFlights()">
    <i class="fas fa-plane"></i> Caută zboruri
</button>


</div>



<script>


    // Inițializarea hărții Google Maps
    function initMap() {
        // Opțiuni pentru harta
        var mapOptions = {
            zoom: 5, // Ajustați nivelul de zoom la necesitate
            center: countryCoordinates // Coordonatele țării
        };
        // Inițializarea hărții
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        // Adăugarea unui marcator pentru țara specificată
        var marker = new google.maps.Marker({
            position: countryCoordinates,
            map: map,
            title: '<?php echo $country; ?>' // Numele țării
        });  }

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
        // Redirecționare la pagina de booking.com când butonul este apăsat
        var bookCitiesButton = document.getElementById('bookCitiesButton');
        bookCitiesButton.addEventListener('click', function() {
            var url = 'https://www.booking.com/searchresults.ro.html?ss=<?=urlencode($country)?>';
            window.open(url, '_blank');
        });
function redirectToFlights() {
    window.open("https://wizzair.com/", "_blank");
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
