<?php
session_start(); // Asigură că sesiunea este începută

include 'connection.php';

// Verifică dacă formularul a fost trimis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifică dacă utilizatorul este autentificat
    if (isset($_SESSION['usermail'])) {
        // Utilizatorul este autentificat, deci preluăm usermail-ul din sesiune
        $usermail = $_SESSION['usermail'];

        // Preluăm celelalte date din formularul trimis prin POST
        if (isset($_POST['nume_complet'], $_POST['email'], $_POST['telefon'], $_POST['nr_adulti'], $_POST['nr_copii'], $_POST['data_tur'], $_POST['mesaj'], $_POST['city'])) {
            $nume_complet = $_POST['nume_complet'];
            $email = $_POST['email'];
            $telefon = $_POST['telefon'];
            $nr_adulti = $_POST['nr_adulti'];
            $nr_copii = $_POST['nr_copii'];
            $data_tur = $_POST['data_tur'];
            $mesaj = $_POST['mesaj'];
            $oras = $_POST['city'];

            // Adunăm vârstele copiilor într-un string
            $varsta_copii = [];
            for ($i = 1; $i <= $nr_copii; $i++) {
                $varsta_copii[] = $_POST["varsta_copil$i"];
            }
            $varsta_copii_str = implode(",", $varsta_copii);

            // Pregătim interogarea SQL
            $sql = "INSERT INTO rezervaritur (usermail, nume_complet, email, telefon, nr_adulti, nr_copii, data_tur, mesaj, oras, varsta_copii)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Pregătim declarația
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssissss", $usermail, $nume_complet, $email, $telefon, $nr_adulti, $nr_copii, $data_tur, $mesaj, $oras, $varsta_copii_str);

            // Executăm interogarea
            if ($stmt->execute()) {
                $_SESSION['message'] = "Rezervarea a fost trimisă cu succes.";
            } else {
                $_SESSION['message'] = "Eroare: " . $stmt->error;
            }

            // Închidem declarația
            $stmt->close();
        } else {
            $_SESSION['message'] = "Nu s-au trimis toate datele necesare prin POST.";
        }
    } else {
        $_SESSION['message'] = "Utilizatorul nu este autentificat.";
    }
}

// Închidem conexiunea
$conn->close();

// Redirecționăm utilizatorul înapoi la formular (sau la o pagină de mulțumire)
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
