<?php
// Includeți fișierul de conexiune la baza de date
include_once 'connection.php';

include 'init.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleloginuser.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>City Break-uri</title>
    <style>
       
main {
  margin-top: 150px; /* Ajustați această valoare pentru a regla poziția main */
  text-align: center;
  position: relative;
  z-index: 1;

}



#video-background {

  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -1000;
  overflow: hidden;

}

.form-container {
  background-color: rgba(255, 255, 255, 0.7); /* Fundal semi-transparent */
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

nav {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 99;
  width: 100%;
  background: #242526;
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

.citybreak-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  padding: 20px;
  margin-top: 20px;

}

.citybreak {
  position: relative;
  border: 1px solid #ddd;
  margin: 20px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
  display: inline-block;
  vertical-align: top;
  width: calc(33% - 40px);
  box-sizing: border-box;
  background-color: white;
  text-decoration: none;
  color: inherit;
}

.city-image {
  max-width: 100%;
  height: auto;
  border-radius: 5px;
}

.city-details {
  display: flex;
  justify-content: space-between;
  margin-top: 10px;
}

.details, .price {
  flex: 1;
  text-align: center;
}

.details {
  background-color: #f1f1f1;
  border-radius: 5px;
  margin-right: 5px;
}

.price {
  background-color: #ffc107;
  border-radius: 5px;
  color: #fff;
}
    .nav-links .search-icon {
    display: inline-block; /* Afișează pictograma de căutare pe orice ecran */
    color: #ffc107;
    font-size: 24px;
    margin-right: 10px;
}

    .city-image {
    width: 1000px; /* Specificați dimensiunea dorită */
    height: 400px; /* Păstrați raportul de aspect pentru a evita distorsiunile */
    margin-top: 20px;
}    
@media screen and (max-width: 970px) {
  .city-image {
    width: 100%; /* Face imaginea să fie 100% din lățimea disponibilă */
    height: auto; /* Împiedică imaginea să se distorsioneze */
    margin-top: 20px; /* Spațiu deasupra imaginii pentru a separa de alte elemente */
  }

  .citybreak {
    width: 100%; /* Elementele "citybreak" să fie pe toată lățimea pe ecrane mici */
    margin: 20px 0; /* Spațiere între elementele "citybreak" */
    padding: 15px; /* Spațiere internă pentru elementele "citybreak" */
    text-align: center; /* Afișează textul "citybreak" în centru */
  }
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
    Your browser does not support the video tag.
</video>

<main>
 <main>
  <div class="citybreak-container">
    <?php
      include_once 'connection.php';
      $sql = "SELECT id, nume_oras, iltinerariu, imagine, pret_citybreak, pret_tur FROM citybreak_tur";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo '<a href="citybreak.php?city=' . $row["nume_oras"] . '" class="citybreak">';
              echo '<h2>City Break ' . $row["nume_oras"] . '</h2>';
              echo '<img src="' . $row["imagine"] . '" alt="' . $row["nume_oras"] . '" class="city-image">';
              echo '<div class="city-details">';
              echo '<p class="details">Detalii</p>';
              echo '<p class="price">' . $row["pret_citybreak"] . '</p>';
              echo '</div>';
              echo '</a>';
          }
      } else {
          echo "Nu există city break-uri disponibile.";
      }

      $conn->close();
    ?>
  </div>
</main>

<footer>
<div class="mini-footer">
    <p>&copy; 2024 TripTrak. Toate drepturile rezervate.</p>
</div>

</footer>
</body>
</html>
