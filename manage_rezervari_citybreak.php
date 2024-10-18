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
$hotel_ales = '';
$data_plecare = '';
$data_retur = '';
$mesaj = '';
$city = '';
$usermail = '';
$msg = '';

if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM rezervari_citybreak WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        $nume_complet = $row['nume_complet'];
        $email = $row['email'];
        $telefon = $row['telefon'];
        $nr_adulti = $row['nr_adulti'];
        $nr_copii = $row['nr_copii'];
        $hotel_ales = $row['hotel_ales'];
        $data_plecare = $row['data_plecare'];
        $data_retur = $row['data_retur'];
        $mesaj = $row['mesaj'];
        $city = $row['city'];
        $usermail = $row['usermail'];
    } else {
        header('location:categories_rezervari_citybreak.php');
        die();
    }
}

if(isset($_POST['submit'])){
    $nume_complet = get_safe_value($con, $_POST['nume_complet']);
    $email = get_safe_value($con, $_POST['email']);
    $telefon = get_safe_value($con, $_POST['telefon']);
    $nr_adulti = get_safe_value($con, $_POST['nr_adulti']);
    $nr_copii = get_safe_value($con, $_POST['nr_copii']);
    $hotel_ales = get_safe_value($con, $_POST['hotel_ales']);
    $data_plecare = get_safe_value($con, $_POST['data_plecare']);
    $data_retur = get_safe_value($con, $_POST['data_retur']);
    $mesaj = get_safe_value($con, $_POST['mesaj']);
    $city = get_safe_value($con, $_POST['city']);
    $usermail = get_safe_value($con, $_POST['usermail']);

    // Verifică dacă rezervarea există deja
    $res = mysqli_query($con, "SELECT * FROM rezervari_citybreak WHERE nume_complet='$nume_complet'");
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
            mysqli_query($con, "UPDATE rezervari_citybreak SET nume_complet='$nume_complet', email='$email', telefon='$telefon', nr_adulti='$nr_adulti', nr_copii='$nr_copii', hotel_ales='$hotel_ales', data_plecare='$data_plecare', data_retur='$data_retur', mesaj='$mesaj', city='$city', usermail='$usermail' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO rezervari_citybreak (nume_complet, email, telefon, nr_adulti, nr_copii, hotel_ales, data_plecare, data_retur, mesaj, city, usermail) VALUES ('$nume_complet', '$email', '$telefon', '$nr_adulti', '$nr_copii', '$hotel_ales', '$data_plecare', '$data_retur', '$mesaj', '$city', '$usermail')");
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
                    <div class="card-header" style="padding-left:80px;"><strong>Rezervare Citybreak</strong> </div>
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
                                <label for="hotel_ales" class="form-control-label">Hotel Ales</label>
                                <input type="text" name="hotel_ales" placeholder="Introduceți hotelul ales" class="form-control" required value="<?php echo $hotel_ales ?>">
                            </div>
                            <div class="form-group">
                                <label for="data_plecare" class="form-control-label">Data Plecare</label>
                                <input type="date" name="data_plecare" class="form-control" required value="<?php echo $data_plecare ?>">
                            </div>
                            <div class="form-group">
                                <label for="data_retur" class="form-control-label">Data Retur</label>
                                <input type="date" name="data_retur" class="form-control" required value="<?php echo $data_retur ?>">
                            </div>
                            <div class="form-group">
                                <label for="city" class="form-control-label">City</label>
                                <input type="text" name="city" placeholder="Introduceți orașul dorit" class="form-control" required value="<?php echo $city ?>">
                            </div>
                            <div class="form-group">
                                <label for="mesaj" class="form-control-label">Mesaj</label>
                                <textarea name="mesaj" placeholder="Introduceți mesajul" class="form-control" required><?php echo $mesaj ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="usermail" class="form-control-label">Usermail</label>
                                <input type="text" name="usermail" placeholder="Introduceți usermail" class="form-control" required value="<?php echo $usermail ?>">
                            </div>
                            <button style="background-color:#008080" id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
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
