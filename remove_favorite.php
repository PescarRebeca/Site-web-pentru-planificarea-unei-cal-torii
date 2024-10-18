<?php
include 'connection.php';
session_start();

if (isset($_POST['id']) && isset($_SESSION['usermail'])) {
    $id = $_POST['id'];
    $usermail = $_SESSION['usermail'];

    // Verificăm dacă favorit-ul aparține utilizatorului autentificat
    $stmt = $conn->prepare("DELETE FROM favorite1 WHERE id = ? AND usermail = ?");
    $stmt->bind_param("is", $id, $usermail);

    if ($stmt->execute()) {
        echo "Eliminat din favorite!";
    } else {
        echo "Eroare la eliminare!";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Date insuficiente!";
}
?>
