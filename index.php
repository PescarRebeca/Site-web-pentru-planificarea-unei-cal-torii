<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
     <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>TripTrak</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'QuarterScript';

        }

        header {
            
            color: #111;
            padding: 10px;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }

        header img {
            width: 70px;
            height: auto;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        main {
            margin-top: 150px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
     

       

        

        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        .button-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .image-button {
            width: calc(100% / 3 - 20px); /* Distribuie lățimea în mod egal pe ecran */
            margin: 10px; /* Adaugă spațiu între imaginile */
            position: relative;
        }

        .image-button img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Asigură că imaginea este acoperită complet */
            border: none;
            transition: filter 0.1s;
        }

        .button-text {
            margin-top: 5px;
        }

        .country-name {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
        }

        .image-button:hover img {
            filter: grayscale(100%);
        }

        .image-button:active img {
            filter: grayscale(100%);
        }

        

        @media (max-width: 768px) {
            #video-background {
                height: calc(100% - 80px); /* Scadem înălțimea footer-ului din înălțimea totală a ecranului */
            }

           
            .search-input {
                width: 100%;
            }

            .button-container {
                flex-direction: column;
                align-items: center;
            }

            .image-button {
                width: 80%;
            }

            .country-name {
                font-size: 12px;
            }

        }



@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700&display=swap');

h1 {
    font-family: 'Pacifico', sans-serif;
    font-size: 80px; /* Mărimea titlului mărită */
    line-height: 1.5;
    max-width: 1000px;
    margin: 0 auto;
    color: white;
}

.search_box .input {
    width: calc(70% - 60px); /* Mărește lățimea casetei de căutare */
    height: 70px; /* Mărește înălțimea casetei de căutare */
    padding: 20px; /* Mărește padding-ul pentru a îmbunătăți aspectul */
    border-radius: 10px; /* Mărește raza colțurilor casetei de căutare */
    font-size: 20px; /* Mărește dimensiunea fontului pentru textul din casetă */
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Noto Sans KR', sans-serif;
}



.header{
    width: 1000px;
    padding: 20px;
    background: #7690da;
    margin: 25px auto;
    border-radius: 5px;
    text-align: center;
}

.header p{
    font-size: 45px;
    text-transform: uppercase;
    font-weight: 700;
    color: #fff;
}

.container .input{
    border: 0;
    outline: none;
    color: #8b7d77;
}

.search_wrap{
    width: 500px;
    margin: 38px auto;
}

.search_wrap .search_box{
    position: relative;
    width: 500px;
    height: 60px;
}

.search_wrap .search_box .input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 10px 20px;
    border-radius: 3px;
    font-size: 18px;
}

.search_wrap .search_box .btn{
    position: absolute;
    top: 0;
    right: 0;
    width: 60px;
    height: 100%;
    background:#4DA6A8;
    z-index: 1;
    cursor: pointer;
}

.search_wrap .search_box .btn:hover{
    background:  #37A89D;    
}

.search_wrap .search_box .btn.btn_common .fas{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #fff;
    font-size: 20px;
}



.search_wrap.search_wrap_1 .search_box .input,
.search_wrap.search_wrap_3 .search_box .input{
    padding-right: 80px;
}




.search_wrap.search_wrap_3 .search_box .input,
.search_wrap.search_wrap_4 .search_box .input,
.search_wrap.search_wrap_6 .search_box .input{
    border-radius: 50px;
}

.search_wrap.search_wrap_3 .search_box .btn{
    right: 0px;
    border-radius: 50%;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
#main span {
    color: white;
}
#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #111;
    min-width: 160px;
    z-index: 1;
}

.dropdown-content a {
    color: #818181;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #444;
    color: #fff;
}

.dropdown:hover .dropdown-content {
    display: block;
}
}

.city-button {
  background-size: cover; /* Asigură că imaginea acoperă întreaga suprafață a butonului */
  width: 100%; /* Setează lățimea butonului la 100% */
  height: 200px; /* Setează înălțimea butonului */
  cursor: pointer;
}}

/* Stiluri pentru țară */
/* Stiluri pentru țară */
.country {
    color: red; /* Schimbați culoarea după preferințele dvs. */
    font-weight: bold; /* Faceti textul țării îngroșat */
}

/* Stiluri pentru orașe */
.city {
    color: black; /* Schimbați culoarea după preferințele dvs. */
}


   .search-icon {
    display: inline-block; /* Afișează pictograma de căutare pe orice ecran */
    color: #ffc107;
    font-size: 24px;
    margin-right: 10px;
}
</style>
<body>

   <header>
 <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php" style="color: #ffc107;">TripTrak</a>
    <a href="index.html"><i class="fas fa-search search-icon"></i>Căutare</a></li>
    <a href="pagina_citybreak.php">City Break</a>
    <a href="#">Contact</a>
    <div class="dropdown">
        <a href="#" class="dropbtn">Conectare</a>
        <div class="dropdown-content">
            <a href="login_form.php">Utilizator</a>
            <a href="login.php">Admin</a>
        </div>
    </div>
</div>

</header>
 


    <!-- Videoclipul de fundal -->
    <video id="video-background" autoplay muted loop>
        <source src="videobackgroundprincipala.mp4" type="video/mp4">
        <!-- Adaugă și alte formate video compatibile cu browserele -->
        <!-- <source src="nume_fisier_video.webm" type="video/webm"> -->
        <!-- <source src="nume_fisier_video.ogv" type="video/ogg"> -->
        Your browser does not support the video tag.
    </video>

    <div id="main" style="position: absolute; top: 10px; right: 10px;">

  
  <span style="font-size:50px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>
    <main>
        <h1>Caută o destinație!</h1>

       <div class="container">
     
       <div class="search_wrap search_wrap_3">
    <div class="search_box">
        <!-- Adaugă un câmp de intrare de tip text -->
        <input type="text" class="input" id="countryInput" list="countries" placeholder="Introduceți destinația dorită..." onkeypress="handleKeyPress(event)">

        <!-- Adaugă un datalist pentru a afișa opțiunile țărilor -->
<datalist id="countries">
    <?php
        include_once 'connection.php';

        // Interogare pentru a extrage informațiile despre țară și orașul asociat din baza de date
        $sql = "SELECT t.nume AS nume_tara, GROUP_CONCAT(o.nume) AS orase
                FROM tari t
                LEFT JOIN orase o ON t.nume = o.tara
                GROUP BY t.nume";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option class='country' value='" . $row["nume_tara"] . "'>";
                $cities = explode(',', $row["orase"]);
                foreach ($cities as $city) {
                    echo "<option class='city' value='" . $city . "'>";
                }
            }
        }
    ?>
</datalist>
 <!-- Butonul de căutare -->
  <div class="btn btn_common">
    <i class="fas fa-search" onclick="searchCountry()"></i>
</div>

        <!-- Avertisment pentru țara negăsită -->
        <div id="warning" class="warning" style="display:none; color: #ffc107;">Destinația nu a fost găsită. Vă rugăm să încercați din nou.</div>



     
</div>
      
    </main>

   

    <script>

function openNav() {
    var sidenav = document.getElementById("mySidenav");
    var main = document.getElementById("main");
    if (sidenav.style.width === "250px") {
        // Dacă meniul este deja deschis, închide-l
        sidenav.style.width = "0";
        main.style.marginLeft = "0";
    } else {
        // Altfel, deschide meniul
        sidenav.style.width = "250px";
        main.style.marginLeft = "250px";
    }
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

    function searchCountry() {
        var countryInput = document.getElementById("countryInput").value;

        // Trimiterea datelor către PHP pentru a efectua căutarea
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                if (response) {
                    // Redirecționarea către pagina țării sau orașului găsit
                    if (response['type'] === 'country') {
                        window.location.href = "pagina-tara.php?country=" + response['nume'];
                    } else if (response['type'] === 'city') {
                        window.location.href = "orase.php?city=" + response['nume'];
                    }
                } else {
                    // Afișarea avertismentului pentru destinația negăsită
                    document.getElementById("warning").style.display = "block";
                }
            }
        };
        xhttp.open("GET", "search.php?destination=" + countryInput, true);
        xhttp.send();
    }

    function handleKeyPress(event) {
        // Verifică dacă tasta apăsată este "Enter"
        if (event.keyCode === 13) {
            // Apelează funcția searchCountry() pentru a efectua căutarea
            searchCountry();
        }
    }
</script>

</body>

</html>