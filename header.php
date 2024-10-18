<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

// Verifică dacă formularul de încărcare a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profilePicture"])) {
    $uploadDir = "uploads/";
    $uploadFile = $uploadDir . basename($_FILES["profilePicture"]["name"]);
    if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $uploadFile)) {
        // Salvarea căii către fișierul încărcat în baza de date sau în alt loc dorit
        // Exemplu: $profilePicturePath = $uploadFile;
        echo "Imaginea de profil a fost încărcată cu succes!";
    } else {
        echo "A apărut o eroare la încărcarea imaginii.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
    
    <style>
      /* Stiluri pentru bara de navigare */
    header {
      background-color: #000000; /* Fond transparent pentru a lăsa videoclipul să fie vizibil */
      color: #fff;
      padding: 10px;
      text-align: center;
      position: fixed;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 2; /* Plasează bara de navigare deasupra videoclipului */
    }

    /* Stiluri pentru logo */
    header img {
      width: 70px;
      height: auto;
    }

    /* Stiluri pentru link-urile din meniu */
    header nav a {
  color: #fff;
  text-decoration: none;
  margin: 0 15px;
  padding: 10px; /* Adaugă padding pentru a crea un chenar */
 
   }

    /* Stiluri pentru link-urile din meniu */
    header nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 15px;
    }

    /* Stiluri pentru link-urile din meniu la hover */
    header nav a:hover {
      text-decoration: underline;
    }
    /* Stiluri pentru conținutul principal */
main {
  margin-top: 150px; /* Modificați această valoare pentru a ajusta poziția titlului */
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
        



/* Stiluri pentru formularul de încărcare a imaginii de profil */
.upload-form {
    margin-top: 20px;
}

.upload-form input[type="file"] {
    display: none;
}

.upload-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

.upload-form input[type="submit"]:hover {
    background-color: #45a049;
}

/* Stiluri pentru imaginea de profil */
.profile-image {
    max-width: 200px;
    height: auto;
    border-radius: 50%;
    margin-top: 20px;
}

.profile-image-container {
    text-align: center;
}


.form-container {
            /* Adaptează stilurile pentru a face conținutul vizibil pe videoclipul de fundal */
            background-color: rgba(255, 255, 255, 0.7); /* Fundal semi-transparent */
            /* Alte ajustări CSS, dacă este necesar */
        }
           /* Stiluri pentru footer */
   






    footer {
      background-color: #000;
      color: #fff;
      padding: 20px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    </style>
       <header>
    <!-- Logo -->
    <img src="logo1.png" alt="Logo Aplicație">

    <!-- Meniu de Navigare -->
    <nav>
      <a href="index.html">Acasă</a>
      <a href="#">Planifică Călătoria</a>
      <a href="#">Despre Noi</a>
      <a href="login_form.php">Deconectare</a>
    </nav>
  </header>
</head>
<body>

 
 
<div class="container">
   <div class="content">
      <h3>Bun venit!</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maxime necessitatibus itaque sit adipisci odit debitis temporibus aliquid nisi totam.</p>
      <p>your email : <span><?php echo $_SESSION['usermail']; ?></span></p>
      <a href="logout.php" class="logout">logout</a>
   </div>
</div>

<!-- Formular pentru încărcarea imaginii de profil -->
<form class="upload-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="profilePicture" accept="image/*">
    <button type="submit">Încarcă imaginea de profil</button>
</form>

<!-- Afișarea imaginii de profil (dacă există) -->
<?php if (isset($profilePicturePath)) : ?>
    <div class="profile-image-container">
        <img class="profile-image" src="<?php echo $profilePicturePath; ?>" alt="Imagine de profil">
    </div>
<?php endif; ?>

</body>
</html>
