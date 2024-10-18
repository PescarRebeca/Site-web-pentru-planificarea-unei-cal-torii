
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
 <title>Contact</title>

    <style>
        /* Stiluri CSS */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: rgba(255, 255, 255, 0.8);
  position: relative; /* Am adăugat position: relative pentru a rezolva problema cu footer-ul */
  min-height: 100vh; /* Asigură ca body să aibă cel puțin înălțimea viewport-ului */
}
.nav-links .search-icon {
  display: inline-block;
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
  padding: 0 30px;
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
  padding-right: 30px;
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
  background: #3a3b3c;
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
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
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
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
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
  border-left: 1px solid rgba(255, 255, 255, 0.09);
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
    box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.18);
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
    background: #3a3b3c;
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
    background: #3a3b3c;
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
    border-top: 1px solid rgba(255, 255, 255, 0.08);
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

:root {
  --primary-color: #010712;
  --secondary-color: #818386;
  --bg-color: #fcfdfd;
  --button-color: #3b3636;
  --h1-color: #3f444c;
}

[data-theme="dark"] {
  --primary-color: #fcfdfd;
  --secondary-color: #818386;
  --bg-color: #010712;
  --button-color: #818386;
  --h1-color: #fcfdfd;
}

* {
  margin: 0;
  box-sizing: border-box;
  transition: all 0.3s ease-in-out;
}

.contact-container {
  display: flex;
  width: 100vw;
  height: 100vh;
  background: var(--bg-color);
}

.left-col {
  width: 45vw;
  height: 100%;
  position: relative;
  overflow: hidden;
}

.left-col video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.logo {
  width: 10rem;
  padding: 1.5rem;
}

.right-col {
  background: var(--bg-color);
  padding: 5rem 3.5rem;
  margin-top: 50px;
}

h1,
label,
button,
.description {
  font-family: 'Jost', sans-serif;
  font-weight: 400;
  letter-spacing: 0.1rem;
}

h1 {
  color: var(--h1-color);
  text-transform: uppercase;
  font-size: 2.5rem;
  letter-spacing: 0.5rem;
  font-weight: 300;
}

p {
  color: var(--secondary-color);
  font-size: 0.9rem;
  letter-spacing: 0.01rem;
  width: 40vw;
  margin: 0.25rem 0;
}

label,
.description {
  color: var(--secondary-color);
  text-transform: uppercase;
  font-size: 0.625rem;
}

form {
  width: 31.25rem;
  position: relative;
  margin-top: 2rem;
  padding: 1rem 0;
}

input,
textarea,
label {
  width: 40vw;
  display: block;
}

p,
placeholder,
input,
textarea {
  font-family: 'Helvetica Neue', sans-serif;
}

input::placeholder,
textarea::placeholder {
  color: var(--primary-color);
}

input,
textarea {
  color: var(--primary-color);
  font-weight: 500;
  background: var(--bg-color);
  border: none;
  border-bottom: 1px solid var(--secondary-color);
  padding: 0.5rem 0;
  margin-bottom: 1rem;
  outline: none;
}

textarea {
  resize: none;
}

button {
  text-transform: uppercase;
  font-weight: 300;
  background: var(--button-color);
  color: var(--bg-color);
  width: 10rem;
  height: 2.25rem;
  border: none;
  border-radius: 2px;
  outline: none;
  cursor: pointer;
}

input:hover,
textarea:hover,
button:hover {
  opacity: 0.5;
}

button:active {
  opacity: 0.8;
}

/* Toggle Switch */

.theme-switch-wrapper {
  display: flex;
  align-items: center;
  text-align: center;
  width: 160px;
  position: absolute;
  top: 0.5rem;
  right: 0;
}

.description {
  margin-left: 1.25rem;
}

.theme-switch {
  display: inline-block;
  height: 34px;
  position: relative;
  width: 60px;
}

.theme-switch input {
  display: none;
}

.slider {
  background-color: #ccc;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: .4s;
}

.slider:before {
  background-color: #fff;
  bottom: 0.25rem;
  content: "";
  width: 26px;
  height: 26px;
  left: 0.25rem;
  position: absolute;
  transition: .4s;
}

input:checked + .slider {
  background-color: var(--button-color);
}

input:checked + .slider:before {
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

#error,
#success-msg {
  width: 40vw;
  margin: 0.125rem 0;
  font-size: 0.75rem;
  text-transform: uppercase;
  font-family: 'Jost';
  color: var(--secondary-color);
}

#success-msg {
  transition-delay: 3s;
}

footer {
  width: 100%;
  background-color: #000;
  color: #fff;
  padding: 20px 0;
  text-align: center;
  position: absolute;
  bottom: 0;
}

.mini-footer {
  max-width: 1200px;
  margin: 0 auto;
}

.mini-footer p {
  margin: 0;
  color: #fff;
}

@media screen and (max-width: 600px) {
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
    box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.18);
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
    background: #3a3b3c;
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
    background: #3a3b3c;
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
    border-top: 1px solid rgba(255, 255, 255, 0.08);
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

  .left-col {
    display: none; /* Ascunde coloana stângă pe ecrane mici */
  }

  .right-col {
    padding: 5rem 1.5rem; /* Ajustează padding-ul pentru conținutul din dreapta */
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
    width: 50%;
    max-width: 600px;
    z-index: 1001;
    text-align: center;
    display: none;
    text-align: center;
}

#message-container.show {
    display: block;
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
    z-index: 1002; /* Asigură un z-index mai mare pentru a fi deasupra mesajului */
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
<div class="contact-container">
  <div class="left-col">
    <video id="video-background" autoplay muted loop>
    <source src="videobackgroundprincipala.mp4" type="video/mp4">
    <!-- Adaugă și alte formate video compatibile cu browserele -->
    <!-- <source src="nume_fisier_video.webm" type="video/webm"> -->
    <!-- <source src="nume_fisier_video.ogv" type="video/ogg"> -->
    Your browser does not support the video tag.
</video>
  </div>
  <div class="right-col">
    <div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
  </label>
  <div class="description">Dark Mode</div>
</div>
    
    <h1>Contactează-ne</h1>
    <p>Plănuiți să călătoriti în curând? Obțineți sfaturi din interior despre unde să mergeți, lucruri de făcut și găsiți cele mai bune oferte pentru următoarea ta aventură.</p>
 
   <form id="contact-form" method="post" action="submit_contact.php">
    <label for="name">Numele și Prenumele</label>
    <input type="text" id="name" name="name" placeholder="Numele tău complet" required>
    
    <label for="email">Email </label>
    <input type="email" id="email" name="email" placeholder="Adresa ta de email" required>
    
    <label for="phone">Telefon </label>
    <input type="tel" id="phone" name="phone" placeholder="Numărul tău de telefon" required>
    
    <label for="message">Mesaj</label>
    <textarea rows="6" placeholder="Mesajul tău" id="message" name="message" required></textarea>
    
    <button type="submit" id="submit" name="submit">Trimite</button>
</form>

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
</div></div>
<script>
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
