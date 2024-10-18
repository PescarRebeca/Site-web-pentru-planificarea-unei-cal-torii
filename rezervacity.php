
<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Formular rezervare</title>
   
</head>
<style >
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

    nav {
        position: fixed;
        z-index: 99;
        width: 100%;
        background: #242526;
        top: 0;
        margin: 0;
        padding: 0;
    }

  form {
    font-family: 'Poppins', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Alinierea la stânga */
    justify-content: center;
    margin-top: 100px; /* Ajustați spațiul de deasupra așa cum doriți */
    margin-left: 20px; /* Mută formularul spre stânga */
    width: 60%; /* Reducerea lățimii formularului la 60% din lățimea ecranului */
    
}


    .form-section {
        width: 80%;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 4px;
    }

    .section-header {
        background-color: #ffc107;
        color: white;
        padding: 10px;
        border-radius: 5px 5px 0 0;
        font-size: 1.2em;
    }

    .section-body {
        border: 1px solid #000;
        border-radius: 0 0 5px 5px;
        padding: 10px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .section-body input, .section-body textarea, .section-body select {
        width: calc(50% - 10px);
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #000;
        border-radius: 5px;
    }

    textarea {
        width: calc(100% - 20px);
        height: 100px;
    }

    .reservation-row {
        width: calc(50% - 10px);
    }

    .form-footer {
        text-align: left;
       
        width: 80%;
    }

    .form-footer input[type="checkbox"] {
        margin-right: 10px;
    }

    .form-footer label {
        font-size: 0.9em;
    }

    .form-footer label a {
        color: #000;
        text-decoration: none;
    }

    .form-footer button {
        background-color: black;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    .form-footer button:hover {
        background-color: #1c86ee;
    }


nav .wrapper{
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
.wrapper .logo a{
  color: #f2f2f2;
  font-size: 30px;
  font-weight: 600;
  text-decoration: none;
}
.wrapper .nav-links{
  display: inline-flex;
  padding-right: 30px; /* Adaugă un spațiu suplimentar pentru a evita suprapunerea */
}
.nav-links li{
  list-style: none;
}
.nav-links li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 9px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.nav-links li a:hover{
  background: #3A3B3C;
}
.nav-links .mobile-item{
  display: none;
}
.nav-links .drop-menu{
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
.nav-links li:hover .mega-box{
  transition: all 0.3s ease;
  top: 70px;
  opacity: 1;
  visibility: visible;
}
.drop-menu li a{
  width: 100%;
  display: block;
  padding: 0 0 0 15px;
  font-weight: 400;
  border-radius: 0px;
}
/* Restul stilurilor CSS... */
   
.mega-box{
  position: absolute;
  left: 0;
  width: 100%;
  padding: 0 30px;
  top: 85px;
  opacity: 0;
  visibility: hidden;
}
.mega-box .content{
  background: #242526;
  padding: 25px 20px;
  display: flex;
  width: 100%;
  justify-content: space-between;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}
.mega-box .content .row{
  width: calc(25% - 30px);
  line-height: 45px;
}
.content .row img{
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.content .row header{
  color: #f2f2f2;
  font-size: 20px;
  font-weight: 500;
}
.content .row .mega-links{
  margin-left: -40px;
  border-left: 1px solid rgba(255,255,255,0.09);
}
.row .mega-links li{
  padding: 0 20px;
}
.row .mega-links li a{
  padding: 0px;
  padding: 0 20px;
  color: #d9d9d9;
  font-size: 17px;
  display: block;
}
.row .mega-links li a:hover{
  color: #f2f2f2;
}
.wrapper .btn{
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  display: none;
}
.wrapper .btn.close-btn{
  position: absolute;
  right: 30px;
  top: 10px;
}

@media screen and (max-width: 970px) {
  .wrapper .btn{
    display: block;
  }
  .wrapper .nav-links{
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
  #menu-btn:checked ~ .nav-links{
    left: 0%;
  }
  #menu-btn:checked ~ .btn.menu-btn{
    display: none;
  }
  #close-btn:checked ~ .btn.menu-btn{
    display: block;
  }
  .nav-links li{
    margin: 15px 10px;
  }
  .nav-links li a{
    padding: 0 20px;
    display: block;
    font-size: 20px;
  }
  .nav-links .drop-menu{
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
  #showMega:checked ~ .mega-box{
    max-height: 100%;
  }
  .nav-links .desktop-item{
    display: none;
  }
  .nav-links .mobile-item{
    display: block;
    color: #f2f2f2;
    font-size: 20px;
    font-weight: 500;
    padding-left: 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .nav-links .mobile-item:hover{
    background: #3A3B3C;
  }
  .drop-menu li{
    margin: 0;
  }
  .drop-menu li a{
    border-radius: 5px;
    font-size: 18px;
  }
  .mega-box{
    position: static;
    top: 65px;
    opacity: 1;
    visibility: visible;
    padding: 0 20px;
    max-height: 0px;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  .mega-box .content{
    box-shadow: none;
    flex-direction: column;
    padding: 20px 20px 0 20px;
  }
  .mega-box .content .row{
    width: 100%;
    margin-bottom: 15px;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .mega-box .content .row:nth-child(1),
  .mega-box .content .row:nth-child(2){
    border-top: 0px;
  }
  .content .row .mega-links{
    border-left: 0px;
    padding-left: 15px;
  }
  .row .mega-links li{
    margin: 0;
  }
  .content .row header{
    font-size: 19px;
  }
}
nav input{
  display: none;
}
.body-text{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  text-align: center;
  padding: 0 30px;
}
.body-text div{
  font-size: 45px;
  font-weight: 600;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


   #video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-widths: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1000;
            overflow: hidden;
            opacity: 0.5;
        }
    
   .nav-links .search-icon {
    display: inline-block; /* Afișează pictograma de căutare pe orice ecran */
    color: #ffc107;
    font-size: 24px;
    margin-right: 10px;
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
@media screen and (max-width: 768px) {
    body {
        flex-direction: column;
      
    }

    main {
        padding-top: 60px; /* Ajustează padding-ul pentru a se potrivi cu înălțimea barei de navigare */
    }
 h1 {
        font-size: 24px; /* Micșorează dimensiunea fontului pentru ecranele mici */
        margin-bottom: 10px;
         margin-top: 60px; /* Adaugă spațiu sub titlu pentru claritate */
    }
    form {

        margin: 20px 0; /* Elimină margin-top și margin-left */
        width: 100%; /* Formularul ocupă întreaga lățime a ecranului */
        padding: 0 10px; /* Adaugă padding pentru a avea un mic spațiu lateral */
    }

    .form-section {
        width: 100%;
        margin-bottom: 10px; /* Adaugă un spațiu între secțiuni */
    }

    .section-body input,
    .section-body textarea,
    .section-body select {
        width: 100%; /* Câmpurile ocupă întreaga lățime a containerului */
    }

    .reservation-row {
        width: 100%; /* Fiecare rând ocupă întreaga lățime */
    }

    .form-footer {
        width: 100%; /* Footer-ul formularului ocupă întreaga lățime */
        text-align: center; /* Aliniere centrată pentru buton */
    }
}

@media screen and (max-width: 480px) {
    nav .wrapper {
        padding: 0 15px; /* Redu padding-ul pentru ecranele foarte mici */
    }

    .nav-links li a {
        font-size: 16px; /* Micșorează fontul pentru link-urile de navigare */
        padding: 8px 12px; /* Ajustează padding-ul */
    }

    .message-box {
        width: 90%; /* Mesajul ocupă 90% din lățimea ecranului */
        max-width: 400px; /* Adaugă o lățime maximă */
    }

    #message-container {
        width: 90%; /* Mesajul ocupă 90% din lățimea ecranului */
        max-width: 400px; /* Adaugă o lățime maximă */
    }
}

</style>
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

    <form id="reservationForm" action="submit_form.php" method="post">
         <?php
    // Includeți fișierul de conexiune la baza de date
    include_once 'connection.php';

    // Verificați dacă a fost furnizată o valoare pentru oraș prin metoda GET
    if(isset($_GET['city'])) {
        $city = $_GET['city'];

        // Interoghează baza de date pentru a obține detalii despre "City Break"
        $sql = "SELECT * FROM citybreak_tur WHERE nume_oras = '$city'";
        $result = $conn->query($sql);

        // Verificați dacă există rezultate
     // Check if results are found
        if ($result->num_rows > 0) {
            // Display city details
             while($row = $result->fetch_assoc()) {
                echo "<h1 id='cityTitle'>City Break " . $row["nume_oras"] . "</h1>" ;
                // Adăugăm un câmp ascuns cu numele orașului
                echo "<input type='hidden' name='city' value='" . $row["nume_oras"] . "'>";
            }
       
       
}} 
    // Închideți conexiunea la baza de date
    
    ?>
        <div class="form-section">
            <div class="section-header">Date contact</div>
            <div class="section-body">
                <input type="text" name="nume_complet" placeholder="Numele complet (nume și prenume)" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="telefon" placeholder="Număr de telefon" required>
            </div>
        </div>

        <div class="form-section">
            <div class="section-header">Date rezervare</div>
            <div class="section-body">
                <div class="reservation-row">
                    <label>Nr. adulți</label>
                    <select name="nr_adulti" id="nrAdulti" required>
                        <option value="">Alege</option>
                        <!-- Options 1 to 15 for adults -->
                        <script>
                            for (let i = 1; i <= 15; i++) {
                                document.write(`<option value="${i}">${i}</option>`);
                            }
                        </script>
                    </select>
                </div>
                <div class="reservation-row">
                    <label>Nr. copii</label>
                    <select name="nr_copii" id="nrCopii" onchange="generateChildAgeFields()" required>
                        <option value="">Alege</option>
                        <!-- Options 0 to 15 for children -->
                        <script>
                            for (let i = 0; i <= 15; i++) {
                                document.write(`<option value="${i}">${i}</option>`);
                            }
                        </script>
                    </select>
                </div>
                
            <div id="childAgeFields"></div>
            <div class="reservation-row">
                <label>Data plecare</label>
                <input type="date" name="data_plecare" required>
            </div>
            <div class="reservation-row">
                <label>Data retur</label>
                <input type="date" name="data_retur" required>
            </div>
            <div class="reservation-row">
                    <label>Hotelul ales</label>
                    <select name="hotel_ales" id="hotelAles" required>
                        <option value="">Alege</option>
                        <option value="hotel1">Hotel 1</option>
                        <option value="hotel2">Hotel 2</option>
                        <option value="hotel3">Hotel 3</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-section">
        <div class="section-header">Mesajul tău</div>
        <div class="section-body">
            <textarea name="mesaj" placeholder="Mesajul tău"></textarea>
        </div>

    </div>
<div id="overlay" class="<?php if (isset($_SESSION['message'])) echo 'show'; ?>"></div>

<div id="message-container" class="<?php if (isset($_SESSION['message'])) echo 'show'; ?>">
    <?php
    if (isset($_SESSION['message'])) {
        echo '<button class="close-btn" onclick="closeMessage()">&times;</button>';
        echo '<p>' . $_SESSION['message'] . '</p>';
        unset($_SESSION['message']);
    }
    ?>
</div>



    <div class="form-footer">
        
        <button type="submit">Trimite cerere</button>
    </div>

</form>
    </div>

    <script > 
        function generateChildAgeFields() {
    const nrCopii = document.getElementById('nrCopii').value;
    const childAgeFields = document.getElementById('childAgeFields');
    childAgeFields.innerHTML = '';

    for (let i = 1; i <= nrCopii; i++) {
        const childAgeField = document.createElement('div');
        childAgeField.classList.add('reservation-row');

        const label = document.createElement('label');
        label.textContent = `Vârsta copil ${i}`;
        childAgeField.appendChild(label);

        const input = document.createElement('input');
        input.type = 'text';
        input.name = `varsta_copil${i}`;
        childAgeField.appendChild(input);

        childAgeFields.appendChild(childAgeField);
    }
}
function closeMessage() {
    document.getElementById('message-container').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}
 </script>
    <footer>
<div class="mini-footer">
    <p>&copy; 2024 TripTrak. Toate drepturile rezervate.</p>
</div>

</footer>
</body>
</html>
