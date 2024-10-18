<?php
require('top.inc.php');

// Verificare dacă utilizatorul este administrator (presupunând că isAdmin() face această verificare)
// isAdmin(); // Poți comenta această linie dacă nu ai implementat încă această funcționalitate

$id = '';
$nume_complet = '';
$email = '';
$telefon = '';
$nr_adulti = '';
$nr_copii = '';
$data_tur = '';
$mesaj = '';
$oras = '';
$varsta_copii = '';
$usermail = '';
$msg = '';

if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM rezervaritur WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        $nume_complet = $row['nume_complet'];
        $email = $row['email'];
        $telefon = $row['telefon'];
        $nr_adulti = $row['nr_adulti'];
        $nr_copii = $row['nr_copii'];
        $data_tur = $row['data_tur'];
        $mesaj = $row['mesaj'];
        $oras = $row['oras'];
        $varsta_copii = $row['varsta_copii'];
        $usermail = $row['usermail'];
    } else {
        header('location:categories_rezervaritur.php');
        die();
    }
}

if(isset($_POST['submit'])){
    $nume_complet = get_safe_value($con, $_POST['nume_complet']);
    $email = get_safe_value($con, $_POST['email']);
    $telefon = get_safe_value($con, $_POST['telefon']);
    $nr_adulti = get_safe_value($con, $_POST['nr_adulti']);
    $nr_copii = get_safe_value($con, $_POST['nr_copii']);
    $data_tur = get_safe_value($con, $_POST['data_tur']);
    $mesaj = get_safe_value($con, $_POST['mesaj']);
    $oras = get_safe_value($con, $_POST['oras']);
    $varsta_copii = get_safe_value($con, $_POST['varsta_copii']);
    $usermail = get_safe_value($con, $_POST['usermail']);

    // Verifică dacă rezervarea există deja
    $res = mysqli_query($con, "SELECT * FROM rezervaritur WHERE nume_complet='$nume_complet'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        if(isset($_GET['id']) && $_GET['id'] != ''){
            $getData = mysqli_fetch_assoc($res);
            if($id != $getData['id']){
                $msg = "Reservation already exists";
            }
        } else {
            $msg = "Reservation already exists";
        }
    }

    // Dacă nu există mesaje de eroare, actualizează sau inserează datele în baza de date
    if($msg == ''){
        if(isset($_GET['id']) && $_GET['id'] != ''){
            mysqli_query($con, "UPDATE rezervaritur SET nume_complet='$nume_complet', email='$email', telefon='$telefon', nr_adulti='$nr_adulti', nr_copii='$nr_copii', data_tur='$data_tur', mesaj='$mesaj', oras='$oras', varsta_copii='$varsta_copii', usermail='$usermail' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO rezervaritur (nume_complet, email, telefon, nr_adulti, nr_copii, data_tur, mesaj, oras, varsta_copii, usermail) VALUES ('$nume_complet', '$email', '$telefon', '$nr_adulti', '$nr_copii', '$data_tur', '$mesaj', '$oras', '$varsta_copii', '$usermail')");
        }
        header('location:categories_rezervaritur.php');
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
                    <div class="card-header" style="padding-left:80px;"><strong>Rezervare Turistică</strong> </div>
                    <form method="post">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="nume_complet" class="form-control-label">Nume Complet</label>
                                <input type="text" name="nume_complet" placeholder="Introduceți numele complet" class="form-control" required value="<?php echo $nume_complet ?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input type="email" name="email" placeholder="Introduceți adresa de email" class="form-control" required value="<?php echo $email ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefon" class="form-control-label">Telefon</label>
                                <input type="text" name="telefon" placeholder="Introduceți numărul de telefon" class="form-control" required value="<?php echo $telefon ?>">
                            </div>
                            <div class="form-group">
                                <label for="nr_adulti" class="form-control-label">Număr Adulți</label>
                                <input type="number" name="nr_adulti" placeholder="Introduceți numărul de adulți" class="form-control" required value="<?php echo $nr_adulti ?>">
                            </div>
                            <div class="form-group">
                                <label for="nr_copii" class="form-control-label">Număr Copii</label>
                                <input type="number" name="nr_copii" placeholder="Introduceți numărul de copii" class="form-control" required value="<?php echo $nr_copii ?>">
                            </div>
                            <div class="form-group">
                                <label for="data_tur" class="form-control-label">Data Tur</label>
                                <input type="date" name="data_tur" class="form-control" required value="<?php echo $data_tur ?>">
                            </div>
                            <div class="form-group">
                                <label for="oras" class="form-control-label">Oraș</label>
                                <input type="text" name="oras" placeholder="Introduceți orașul dorit" class="form-control" required value="<?php echo $oras ?>">
                            </div>
                            <div class="form-group">
                                <label for="varsta_copii" class="form-control-label">Vârsta Copii</label>
                                <input type="text" name="varsta_copii" placeholder="Introduceți vârsta copiilor" class="form-control" required value="<?php echo $varsta_copii ?>">
                            </div>
                            <div class="form-group">
                                <label for="mesaj" class="form-control-label">Mesaj</label>
                                <textarea name="mesaj" placeholder="Introduceți mesajul" class="form-control" required><?php echo $mesaj ?></textarea>
                            </div>
                            <button style="background-color:#008080" id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">SUBMIT</span>
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
