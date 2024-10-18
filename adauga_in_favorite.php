<?php
session_start();
include_once 'connection.php';

// Verifică dacă utilizatorul este autentificat
if (!isset($_SESSION['usermail'])) {
    echo 'Trebuie să fii autentificat pentru a adăuga în favorite.';
    exit;
}

// Verifică dacă a fost trimisă cererea POST pentru adăugarea în favorite
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['type']) && isset($_POST['name'])) {
    $type = $_POST['type']; // Tipul de informație (city sau country)
    $name = $_POST['name']; // Numele orașului sau țării
    $usermail = $_SESSION['usermail'];

    // Verifică dacă informația există deja în favorite pentru utilizatorul curent
    $check_query = "SELECT * FROM favorite1 WHERE usermail = '$usermail' AND type = '$type' AND name = '$name'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows == 0) { // Dacă informația nu există deja în lista de favorite
        // Inserează informația în baza de date
        $insert_query = "INSERT INTO favorite1 (usermail, type, name) VALUES ('$usermail', '$type', '$name')";
        if ($conn->query($insert_query) === TRUE) {
            echo  " A fost adăugat în favorite.";
        } else {
            echo "Eroare: " . $conn->error;
        }
    } else {
        echo  " Este deja în favorite.";
    }
}

// Închide conexiunea la baza de date
$conn->close();

?>
