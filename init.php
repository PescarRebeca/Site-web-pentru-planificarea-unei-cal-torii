<?php
// Începeți sau continuați sesiunea
session_start();

// Dacă utilizatorul nu este autentificat și se încearcă accesarea unei pagini restricționate, redirecționați-l către pagina de autentificare
$pagini_restrictionate = array("citybreak.php", "citytour.php");
if (!isset($_SESSION['usermail']) && in_array(basename($_SERVER['SCRIPT_NAME']), $pagini_restrictionate)) {
    header("Location: login_form.php");
    exit;
}

// Funcție pentru deconectare
function deconectare() {
    // Ștergeți toate variabilele de sesiune
    session_unset();

    // Distrugeți sesiunea
    session_destroy();

    // Redirecționați utilizatorul către pagina de start sau altă pagină relevantă
    header("Location: index.php");
    exit;
}
?>
