<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tari_informatii");
	define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/admin/');
	define('SITE_PATH','http://localhost/admin-panel/');
	define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
	define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
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