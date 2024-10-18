<?php
require('top.inc.php');

// Verificare dacă utilizatorul este administrator (presupunând că isAdmin() face această verificare)
// isAdmin(); // Poți comenta această linie dacă nu ai implementat încă această funcționalitate

$id = '';
$nume_complet = '';
$data_intrare = '';
$ora_intrare = '';
$telefon = '';
$email = '';
$usermail = '';
$msg = '';

if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM rezervari_intrari WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        $nume_complet = $row['nume_complet'];
        $data_intrare = $row['data_intrare'];
        $ora_intrare = $row['ora_intrare'];
        $telefon = $row['telefon'];
        $email = $row['email'];
        $usermail = $row['usermail'];
    } else {
        header('location:categories_rezervari_intrari.php');
        die();
    }
}

if(isset($_POST['submit'])){
    $nume_complet = get_safe_value($con, $_POST['nume_complet']);
    $data_intrare = get_safe_value($con, $_POST['data_intrare']);
    $ora_intrare = get_safe_value($con, $_POST['ora_intrare']);
    $telefon = get_safe_value($con, $_POST['telefon']);
    $email = get_safe_value($con, $_POST['email']);
    $usermail = get_safe_value($con, $_POST['usermail']);

    // Verifică dacă rezervarea există deja
    $res = mysqli_query($con, "SELECT * FROM rezervari_intrari WHERE nume_complet='$nume_complet'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        if(isset($_GET['id']) && $_GET['id'] != ''){
            $getData = mysqli_fetch_assoc($res);
            if($id != $getData['id']){
                $msg = "Rezervarea deja există";
            }
        } else {
            $msg = "Rezervarea deja există";
        }
    }

    // Dacă nu există mesaje de eroare, actualizează sau inserează datele în baza de date
    if($msg == ''){
        if(isset($_GET['id']) && $_GET['id'] != ''){
            mysqli_query($con, "UPDATE rezervari_intrari SET nume_complet='$nume_complet', data_intrare='$data_intrare', ora_intrare='$ora_intrare', telefon='$telefon', email='$email', usermail='$usermail' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO rezervari_intrari (nume_complet, data_intrare, ora_intrare, telefon, email, usermail) VALUES ('$nume_complet', '$data_intrare', '$ora_intrare', '$telefon', '$email', '$usermail')");
        }
        
        die();
    }
}
?>
<style>
.form-control {
    height: 50px; /* Setează înălțimea pentru input-uri text */
    padding: 10px; /* Adaugă spațiere internă */
    box-sizing: border-box; /* Include padding-ul și border-ul în lățime și înălțime */
}

textarea.form-control {
    height: 150px; /* Setează înălțimea pentru textarea */
}
</style>

<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="padding-left:80px;"><strong>Rezervare Intrare</strong> </div>
                    <form method="post">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="nume_complet" class="form-control-label">Nume Complet</label>
                                <input type="text" name="nume_complet" placeholder="Introduceți numele complet" class="form-control" required value="<?php echo $nume_complet ?>">
                            </div>
                            <div class="form-group">
                                <label for="data_intrare" class="form-control-label">Data Intrare</label>
                                <input type="date" name="data_intrare" class="form-control" required value="<?php echo $data_intrare ?>">
                            </div>
                            <div class="form-group">
                                <label for="ora_intrare" class="form-control-label">Ora Intrare</label>
                                <input type="time" name="ora_intrare" class="form-control" required value="<?php echo $ora_intrare ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefon" class="form-control-label">Telefon</label>
                                <input type="text" name="telefon" placeholder="Introduceți numărul de telefon" class="form-control" required value="<?php echo $telefon ?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input type="email" name="email" placeholder="Introduceți adresa de email" class="form-control" required value="<?php echo $email ?>">
                            </div>
                            <div class="form-group">
                                <label for="usermail" class="form-control-label">Usermail</label>
                                <input type="text" name="usermail" placeholder="Introduceți usermail" class="form-control" required value="<?php echo $usermail ?>">
                            </div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                <span id="payment-button-amount">Salvează</span>
                            </button>
                            <div class="field_error"><?php echo $msg ?></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('footer.inc.php');
?>
