<?php
// Parametrii pentru conexiunea la baza de date
$servername = "localhost";
$username = "root"; // Numele de utilizator implicit pentru XAMPP
$password = ""; // Parola implicită pentru XAMPP
$dbname = "tari_informatii"; // Numele bazei de date pe care ați creat-o

// Crearea conexiunii
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificarea conexiunii
if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}
?>
