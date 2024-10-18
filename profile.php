<?php
include 'init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Profil</title>
    <style>

main {
  margin-top: 100px; /* Asigură spațiul pentru bara de navigare */
  text-align: center;
  position: relative;
  z-index: 1;
}

        .profile-container {
            max-width: 600px;
            margin: 120px auto 20px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .profile-container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .profile-info {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .profile-info p {
            margin: 10px 0;
            color: #555;
        }

        .profile-links a {
            display: inline-block;
            margin: 10px;
            text-decoration: none;
            color: #007bff;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .profile-links a:hover {
            background-color: #007bff;
            color: #fff;
        }

  body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
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


main {
  margin-top: 0;
  text-align: center;
  position: relative;
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  /* Adaugă un spațiu de sus echivalent cu înălțimea barei de navigare */
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
    margin-right: 10px}
       .container {
            max-width: 1000px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .container p {
            color: #555;
        }
        .container2 {
    max-width: auto; /* Ajustează dimensiunea containerului pentru a include ambele div-uri */
    margin: 20px auto;
    display: flex; /* Folosește flexbox pentru a alinia div-urile orizontal */
    justify-content: space-between; /* Spațiază div-urile pentru a ocupa tot spațiul disponibil */
}

.rezervari_citybrek, .rezervari_tur, .rezervari_intrari {
    flex: 1; /* Fiecare div va ocupa spațiu egal pe axa orizontală */
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
}

.rezervari_citybrek h2, .rezervari_tur h2, .rezervari_intrari h2 {
    margin-bottom: 10px;
    color: #333;
}

.rezervari_citybrek p, .rezervari_tur p , .rezervari_intrari p {
    margin-bottom: 8px;
    color: #666;
}

.rezervari_citybrek hr, .rezervari_tur hr, .rezervari_intrari hr {
    border: none;
    border-top: 1px solid #ddd;
    margin: 10px 0;
}
footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #000;
    padding: 20px 0;
    text-align: center;
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
    .container .container2 .profile-container {
        flex-direction: column; /* La ecrane mici, afișează div-urile vertical */
    }
    .rezervari_citybrek, .rezervari_tur, s {
        padding: 10px;
        margin-bottom: 10px; /* Adaugă spațiu între div-uri la ecrane mici */
    }
}
.show-more-btn {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.show-more-btn:hover {
    background-color: #0056b3;
}
@media screen and (max-width: 600px) {
    .container2 {
        flex-direction: column; /* Afișează rezervările vertical pe ecrane mici */
    }

    .rezervari_citybrek, .rezervari_tur, .rezervari_intrari {
        margin-bottom: 20px; /* Spațiu între rezervări pe ecrane mici */
        padding: 15px; /* Padding pentru rezervări pe ecrane mici */
    }

    .container .container2 .profile-container {
        flex-direction: column; /* Afișează profilele vertical pe ecrane mici */
    }
}
footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #000;
    padding: 20px 0;
    text-align: center;
    color: #fff;
}

@media screen and (max-width: 1500px) {
    main {
        margin-top: 0; /* Resetează margin-top-ul pentru main pe ecranele medii și tablete */
    }

    footer {
        position: relative; /* Redefinește poziția la relativ pentru a se plasa corect în conținut */
        margin-top: auto; /* Asigură plasarea footerului în partea de jos a conținutului */
    }
}

@media screen and (max-width: 768px) {
    footer {
        position: fixed; /* Redefinește poziția la relativ pentru ecranele de tabletă */
        margin-top: auto; /* Asigură plasarea footerului în partea de jos a conținutului */
    }
}

 .favorite-item {
            position: relative;
            
            margin-bottom: 10px;
        }
        .delete-button {
            display: none;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .favorite-item:hover .delete-button {
            display: inline-block;
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

 <div class="profile-container">
        <h1>Profil </h1>
        <div class="profile-info">
            <?php
            // Verificăm dacă utilizatorul este autentificat și afișăm informațiile sale
            if(isset($_SESSION['usermail'])) {
                echo '<p><strong>Nume utilizator:</strong> ' . $_SESSION['usermail'] . '</p>';
                // Poți adăuga alte informații despre utilizator dacă sunt disponibile în sesiune
            } else {
                echo '<p>Utilizatorul nu este autentificat.</p>';
            }
            ?>
        </div>
        
    </div>
<div class="container">
  <h2>Favorite:</h2>
<?php
include_once 'connection.php';

if(isset($_SESSION['usermail'])) {
    $usermail = $_SESSION['usermail'];

    $stmt = $conn->prepare("SELECT id, type, name FROM favorite1 WHERE usermail = ?");
    $stmt->bind_param("s", $usermail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $type = htmlspecialchars($row['type']);
            $name = htmlspecialchars($row['name']);
            echo "<div class='favorite-item' id='favorite-$id'>";
            if ($type === 'city') {
                echo "<p><a href='orase.php?city=" . urlencode($name) . "'>Oraș: $name</a></p>";
            } elseif ($type === 'country') {
                echo "<p><a href='pagina-tara.php?country=" . urlencode($name) . "'>Țară: $name</a></p>";
            } elseif ($type === 'tur') {
                echo "<p><a href='citytour.php?city=" . urlencode($name) . "'>Tur: $name</a></p>";
            } elseif ($type === 'citybreak') {
                echo "<p><a href='citybreak.php?city=" . urlencode($name) . "'>Citybreak: $name</a></p>";
            } else {
                echo "<p><a href='{$type}.php?type=" . urlencode($type) . "&name=" . urlencode($name) . "'>" . ucfirst($type) . ": $name</a></p>";
            }
            echo "<button class='delete-button' onclick='deleteFavorite($id)'>Șterge</button>";
            echo "<div id='message-$id'></div>";
            echo "</div>";
        }
    } else {
        echo "<p>Nu ați adăugat niciun oraș, țară, tur sau citybreak la favorite încă.</p>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<p>Utilizatorul nu este autentificat.</p>";
}
?>

</div>


<div class="container2">
 <div class="rezervari_citybrek">
        <h2>Cereri de rezervare City Break:</h2>
        <?php

include 'connection.php';

$usermail = $_SESSION['usermail'];

// Interogare pentru a selecta cererile de rezervare trimise de utilizatorul conectat
$sql = "SELECT * FROM rezervari_citybreak WHERE usermail = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usermail);
$stmt->execute();
$result = $stmt->get_result();

// Afisare cereri de rezervare
// Modificare în locul unde afișezi cererile de rezervare
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Afișăm informațiile esențiale ale cererii de rezervare
        echo "<p>Oraș: " . htmlspecialchars($row['city']) . "</p>";
        echo "<button class='show-more-btn' onclick='toggleMoreInfo(this)'>Afișează mai multe</button>";
        echo "<div class='more-info' style='display: none;'>";
        echo "<p>Nume complet: " . htmlspecialchars($row['nume_complet']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($row['email']) . "</p>";
        echo "<p>Telefon: " . htmlspecialchars($row['telefon']) . "</p>";
        echo "<p>Număr adulți: " . htmlspecialchars($row['nr_adulti']) . "</p>";
        echo "<p>Număr copii: " . htmlspecialchars($row['nr_copii']) . "</p>";
        echo "<p>Data plecare: " . htmlspecialchars($row['data_plecare']) . "</p>";
        echo "<p>Data retur: " . htmlspecialchars($row['data_retur']) . "</p>";
        echo "<p>Hotel ales: " . htmlspecialchars($row['hotel_ales']) . "</p>";
        echo "<p>Mesaj: " . htmlspecialchars($row['mesaj']) . "</p>";
        echo "</div>";
        echo "<hr>";
    }
} else {
    echo "Nu ai trimis nicio cerere de rezervare.";
}


?>

    </div>
    <div class="rezervari_tur">
    <h2>Cereri de rezervare Tur:</h2>
    <?php
    include 'connection.php';

    $usermail = $_SESSION['usermail'];

    // Interogare pentru a selecta cererile de rezervare trimise de utilizatorul conectat
    $sql = "SELECT * FROM rezervaritur WHERE usermail = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usermail);
    $stmt->execute();
    $result = $stmt->get_result();

    // Afisare cereri de rezervare
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Afișăm informațiile esențiale ale cererii de rezervare
            echo "<p>Oraș ales: " . htmlspecialchars($row['oras']) . "</p>";
            echo "<button class='show-more-btn' onclick='toggleMoreInfo(this)'>Afișează mai multe</button>";
            echo "<div class='more-info' style='display: none;'>";
            echo "<p>Nume complet: " . htmlspecialchars($row['nume_complet']) . "</p>";
            echo "<p>Email: " . htmlspecialchars($row['email']) . "</p>";
            echo "<p>Telefon: " . htmlspecialchars($row['telefon']) . "</p>";
            echo "<p>Număr adulți: " . htmlspecialchars($row['nr_adulti']) . "</p>";
            echo "<p>Număr copii: " . htmlspecialchars($row['nr_copii']) . "</p>";
            echo "<p>Data: " . htmlspecialchars($row['data_tur']) . "</p>";
            echo "<p>Mesaj: " . htmlspecialchars($row['mesaj']) . "</p>";
            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "Nu ai trimis nicio cerere de rezervare.";
    }

   
    ?>
</div>
<div class="rezervari_intrari">
    <h2>Cereri de rezervare Intrări:</h2>
    <?php
    include 'connection.php';

    $usermail = $_SESSION['usermail'];

    // Interogare pentru a selecta cererile de rezervare trimise de utilizatorul conectat
    $sql = "SELECT * FROM rezervari_intrari WHERE usermail = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usermail);
    $stmt->execute();
    $result = $stmt->get_result();

    // Afisare cereri de rezervare
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Afișăm informațiile esențiale ale cererii de rezervare
            echo "<p>Nume complet: " . htmlspecialchars($row['nume_complet']) . "</p>";
            echo "<button class='show-more-btn' onclick='toggleMoreInfo(this)'>Afișează mai multe</button>";
            echo "<div class='more-info' style='display: none;'>";
            echo "<p>Data intrare: " . htmlspecialchars($row['data_intrare']) . "</p>";
            echo "<p>Ora intrare: " . htmlspecialchars($row['ora_intrare']) . "</p>";
            echo "<p>Telefon: " . htmlspecialchars($row['telefon']) . "</p>";
            echo "<p>Email: " . htmlspecialchars($row['email']) . "</p>";
            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "Nu ai trimis nicio cerere de rezervare.";
    }

    $stmt->close();
    $conn->close();
    ?>
</div>

</div>
<script>
function toggleMoreInfo(button) {
    var moreInfo = button.nextElementSibling;
    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        button.textContent = "Ascunde";
    } else {
        moreInfo.style.display = "none";
        button.textContent = "Afișează mai multe";
    }
}
   function deleteFavorite(id) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "remove_favorite.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = xhr.responseText;
                    document.getElementById("message-" + id).innerHTML = response;
                    if (response.includes("Eliminat din favorite")) {
                        document.getElementById("favorite-" + id).style.display = "none";
                    }
                }
            };
            xhr.send("id=" + id);
        }
</script>

<footer>
<div class="mini-footer">
    <p>&copy; 2024 TripTrak. Toate drepturile rezervate.</p>
</div>

</footer>
</body>
</html>
