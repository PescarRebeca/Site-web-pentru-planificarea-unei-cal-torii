<?php
include_once 'connection.php';

if (isset($_GET['destination'])) {
    $destination = $_GET['destination'];

    // Căutare pentru țară
    $sqlCountry = "SELECT nume FROM tari WHERE nume LIKE '%$destination%'";
    $resultCountry = $conn->query($sqlCountry);

    if ($resultCountry->num_rows > 0) {
        $row = $resultCountry->fetch_assoc();
        echo json_encode(['type' => 'country', 'nume' => $row['nume']]);
    } else {
        // Căutare pentru oraș
        $sqlCity = "SELECT nume FROM orase WHERE nume LIKE '%$destination%'";
        $resultCity = $conn->query($sqlCity);

        if ($resultCity->num_rows > 0) {
            $row = $resultCity->fetch_assoc();
            echo json_encode(['type' => 'city', 'nume' => $row['nume']]);
        } else {
            echo json_encode(null);
        }
    }
}
?>
