<?php
require('top.inc.php'); // Fișierul care conține antetul paginii
require_once('connection.inc.php'); // Conexiunea la baza de date

// Interogare pentru a număra orașele din tabelul 'orase'
$sql_orase = "SELECT COUNT(id) as total_orase FROM orase";
$result_orase = $conn->query($sql_orase);
$row_orase = $result_orase->fetch_assoc();
$total_orase = $row_orase['total_orase'];

// Interogare pentru a număra utilizatorii din tabelul 'utilizatori'
$sql_utilizatori = "SELECT COUNT(id) as total_users FROM user";
$result_utilizatori = $conn->query($sql_utilizatori);
$row_utilizatori = $result_utilizatori->fetch_assoc();
$total_users = $row_utilizatori['total_users'];

// Interogare pentru a număra cererile pentru tururi
$sql_cereri_tur = "SELECT COUNT(id) as total_cereri_tur FROM rezervaritur";
$result_cereri_tur = $conn->query($sql_cereri_tur);
$row_cereri_tur = $result_cereri_tur->fetch_assoc();
$total_cereri_tur = $row_cereri_tur['total_cereri_tur'];

// Interogare pentru a număra cererile pentru citybreak
$sql_cereri_citybreak = "SELECT COUNT(id) as total_cereri_citybreak FROM rezervari_citybreak";
$result_cereri_citybreak = $conn->query($sql_cereri_citybreak);
$row_cereri_citybreak = $result_cereri_citybreak->fetch_assoc();
$total_cereri_citybreak = $row_cereri_citybreak['total_cereri_citybreak'];

// Interogare pentru a număra cererile pentru intrări
$sql_cereri_intrari = "SELECT COUNT(id) as total_cereri_intrari FROM rezervari_intrari";
$result_cereri_intrari = $conn->query($sql_cereri_intrari);
$row_cereri_intrari = $result_cereri_intrari->fetch_assoc();
$total_cereri_intrari = $row_cereri_intrari['total_cereri_intrari'];

// Interogare pentru a număra totalul de țări
$sql_tari = "SELECT COUNT(id) as total_tari FROM tari";
$result_tari = $conn->query($sql_tari);
$row_tari = $result_tari->fetch_assoc();
$total_tari = $row_tari['total_tari'];

// Interogare pentru a număra totalul de destinații
$sql_destinatii = "SELECT COUNT(id) as total_destinatii FROM destinatii";
$result_destinatii = $conn->query($sql_destinatii);
$row_destinatii = $result_destinatii->fetch_assoc();
$total_destinatii = $row_destinatii['total_destinatii'];

// Încluderea conținutului paginii
?>
<h4 class="box-title" style="padding-left:50px;">DASHBOARD </h4>
<div class="content pb-0">
    <div class="orders">
        <div class="row">

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title" style="padding-left:50px;">Cereri pentru Tururi</h4>
                        <p class="text-muted" style="padding-left:50px;"><?php echo $total_cereri_tur; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title" style="padding-left:50px;">Cereri pentru Citybreak</h4>
                        <p class="text-muted" style="padding-left:50px;"><?php echo $total_cereri_citybreak; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title" style="padding-left:50px;">Cereri pentru Intrări</h4>
                        <p class="text-muted" style="padding-left:50px;"><?php echo $total_cereri_intrari; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title" style="padding-left:50px;">Număr total de țări</h4>
                        <p class="text-muted" style="padding-left:50px;"><?php echo $total_tari; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title" style="padding-left:50px;">Număr total de destinații</h4>
                        <p class="text-muted" style="padding-left:50px;"><?php echo $total_destinatii; ?></p>
                    </div>
                </div>
            </div>
<div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title" style="padding-left:50px;">Număr total de orașe</h4>
                        <p class="text-muted" style="padding-left:50px;"><?php echo $total_orase; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('footer.inc.php'); // Fișierul care conține subsolul paginii
?>
