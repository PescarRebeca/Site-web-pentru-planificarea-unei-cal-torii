<?php
include 'init.php'; // Include fișierul de conexiune la baza de date
include 'connection.php';

// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preia datele din formular și aplică funcția mysqli_real_escape_string pentru a preveni SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL pentru inserarea datelor în baza de date folosind instrucțiuni pregătite (prepared statements)
    $stmt = $conn->prepare("INSERT INTO contactări (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Execută query-ul pregătit
    if ($stmt->execute()) {
        // Mesajul a fost trimis cu succes
        session_start();
        $_SESSION['message'] = "Mesajul a fost trimis cu succes!";
        $stmt->close();
        $conn->close();
        header('Location: ' . $_SERVER['HTTP_REFERER']); // Redirecționează înapoi la pagina de proveniență
        exit();
    } else {
        // Eroare la trimiterea mesajului
        session_start();
        $_SESSION['message'] = "Eroare: " . $stmt->error;
        $stmt->close();
        $conn->close();
        header('Location: ' . $_SERVER['HTTP_REFERER']); // Redirecționează înapoi la pagina de proveniență
        exit();
    }
} else {
    // Dacă formularul nu a fost trimis corect, redirecționează înapoi la pagina de proveniență
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
