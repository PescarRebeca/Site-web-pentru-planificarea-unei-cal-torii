<?php
// Include fișierul de conexiune la baza de date
include_once 'connection.php';

// Pornește sesiunea
session_start();

if (isset($_SESSION['usermail'])) {
    // Preia adresa de email a utilizatorului conectat din sesiune
    $usermail = $_SESSION['usermail'];
} else {
    $_SESSION['message'] = "Utilizatorul nu este conectat.";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

// Verifică dacă toate datele necesare sunt furnizate
if (isset($_POST['fullName'], $_POST['entryDate'], $_POST['entryTime'], $_POST['phone'], $_POST['email'])) {
    $fullName = $_POST['fullName'];
    $entryDate = $_POST['entryDate'];
    $entryTime = $_POST['entryTime'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    // Pregătește și execută interogarea SQL pentru a insera datele în baza de date
    $sql = "INSERT INTO rezervari_intrari (usermail, nume_complet, data_intrare, ora_intrare, telefon, email) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        // Dacă prepare() a returnat false, afișează eroarea
        $_SESSION['message'] = 'Eroare la pregătirea declarației SQL: ' . $conn->error;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $stmt->bind_param("ssssss", $usermail, $fullName, $entryDate, $entryTime, $phone, $email);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Datele au fost trimise cu succes.";
    } else {
        $_SESSION['message'] = "Eroare: " . $stmt->error;
    }

    $stmt->close();
} else {
    $_SESSION['message'] = "Vă rugăm să completați toate câmpurile.";
}

$conn->close();

// Redirecționează utilizatorul înapoi la formular
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
