<?php
require('top.inc.php');
isAdmin();
$id = '';
$nume = '';
$descriere = '';
$imagine = '';
$longitudine = '';
$latitudine = '';
$relief = '';
$clima = '';
$istoric = '';
$msg = '';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM tari WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $nume = $row['nume'];
        $descriere = $row['descriere'];
        $imagine = $row['imagine'];
        $longitudine = $row['longitudine'];
        $latitudine = $row['latitudine'];
        $relief = $row['relief'];
        $clima = $row['clima'];
        $istoric = $row['istoric'];
    } else {
        header('location:categories_tari.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $nume = get_safe_value($con, $_POST['nume']);
    $descriere = get_safe_value($con, $_POST['descriere']);
    $imagine = get_safe_value($con, $_POST['imagine']);
    $longitudine = get_safe_value($con, $_POST['longitudine']);
    $latitudine = get_safe_value($con, $_POST['latitudine']);
    $relief = get_safe_value($con, $_POST['relief']);
    $clima = get_safe_value($con, $_POST['clima']);
    $istoric = get_safe_value($con, $_POST['istoric']);

    // Verifică dacă țara există deja
    $res = mysqli_query($con, "SELECT * FROM tari WHERE nume='$nume'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id != $getData['id']) {
                $msg = "Country already exists";
            }
        } else {
            $msg = "Country already exists";
        }
    }

    // Dacă nu există mesaje de eroare, actualizează sau inserează datele în baza de date
    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            mysqli_query($con, "UPDATE tari SET nume='$nume', descriere='$descriere', imagine='$imagine', longitudine='$longitudine', latitudine='$latitudine', relief='$relief', clima='$clima', istoric='$istoric' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO tari (nume, descriere, imagine, longitudine, latitudine, relief, clima, istoric) VALUES ('$nume', '$descriere', '$imagine', '$longitudine', '$latitudine', '$relief', '$clima', '$istoric')");
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
                    <div class="card-header" style="padding-left:80px;"><strong>COUNTRY FORM</strong> </div>
                    <form method="post">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="nume" class="form-control-label">Nume</label>
                                <input type="text" name="nume" placeholder="Introduceți numele țării" class="form-control" required value="<?php echo $nume ?>">
                            </div>
                            <div class="form-group">
                                <label for="descriere" class="form-control-label">Descriere</label>
                                <textarea name="descriere" placeholder="Introduceți descrierea țării" class="form-control" required><?php echo $descriere ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imagine" class="form-control-label">Imagine</label>
                                <input type="text" name="imagine" placeholder="Introduceți URL-ul imaginii" class="form-control" required value="<?php echo $imagine ?>">
                            </div>
                            <div class="form-group">
                                <label for="longitudine" class="form-control-label">Longitudine</label>
                                <input type="text" name="longitudine" placeholder="Introduceți longitudinea" class="form-control" required value="<?php echo $longitudine ?>">
                            </div>
                            <div class="form-group">
                                <label for="latitudine" class="form-control-label">Latitudine</label>
                                <input type="text" name="latitudine" placeholder="Introduceți latitudinea" class="form-control" required value="<?php echo $latitudine ?>">
                            </div>
                            <div class="form-group">
                                <label for="relief" class="form-control-label">Relief</label>
                                <textarea name="relief" placeholder="Introduceți descrierea reliefului" class="form-control" required><?php echo $relief ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="clima" class="form-control-label">Clima</label>
                                <textarea name="clima" placeholder="Introduceți descrierea climei" class="form-control" required><?php echo $clima ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="istoric" class="form-control-label">Istorie</label>
                                <textarea name="istoric" placeholder="Introduceți descrierea istoriei" class="form-control" required><?php echo $istoric ?></textarea>
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
