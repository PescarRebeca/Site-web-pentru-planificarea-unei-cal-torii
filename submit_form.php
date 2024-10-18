<?php
session_start(); // Asigură că sesiunea este începută

if(isset($_SESSION['usermail'])) {
    $usermail = $_SESSION['usermail'];

    if(isset($_POST['nume_complet'], $_POST['email'], $_POST['telefon'], $_POST['nr_adulti'], $_POST['nr_copii'], $_POST['data_plecare'], $_POST['data_retur'], $_POST['hotel_ales'], $_POST['mesaj'])) {
        $nume_complet = $_POST['nume_complet'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $nr_adulti = $_POST['nr_adulti'];
        $nr_copii = $_POST['nr_copii'];
        $data_plecare = $_POST['data_plecare'];
        $data_retur = $_POST['data_retur'];
        $hotel_ales = $_POST['hotel_ales'];
        $mesaj = $_POST['mesaj'];
        $nume_oras = $_POST['city'];

        include_once 'connection.php';

        $stmt = $conn->prepare("INSERT INTO rezervari_citybreak (usermail, nume_complet, email, telefon, nr_adulti, nr_copii, data_plecare, data_retur, hotel_ales, mesaj, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssiisssss", $usermail, $nume_complet, $email, $telefon, $nr_adulti, $nr_copii, $data_plecare, $data_retur, $hotel_ales, $mesaj,  $nume_oras);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Cererea de rezervare a fost înregistrată cu succes.";
        } else {
            $_SESSION['message'] = "Eroare la înregistrarea cererii de rezervare: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        $_SESSION['message'] = "Nu s-au trimis toate datele necesare prin POST.";
    }
} else {
    $_SESSION['message'] = "Utilizatorul nu este autentificat.";
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
