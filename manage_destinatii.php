<?php
require('top.inc.php');
isAdmin();
$id = '';
$nume_destinatie = '';
$tara = '';
$oras = '';
$descriere = '';
$imagine = '';
$longitudine = '';
$latitudine = '';
$despre = '';
$pret = '';
$msg = '';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM destinatii WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $nume_destinatie = $row['nume_destinatie'];
        $tara = $row['tara'];
        $oras = $row['oras'];
        $descriere = $row['descriere'];
        $imagine = $row['imagine'];
        $longitudine = $row['longitudine'];
        $latitudine = $row['latitudine'];
        $despre = $row['despre'];
        $pret = $row['pret'];
    } else {
        header('location:categories_destinatii.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $nume_destinatie = get_safe_value($con, $_POST['nume_destinatie']);
    $tara = get_safe_value($con, $_POST['tara']);
    $oras = get_safe_value($con, $_POST['oras']);
    $descriere = get_safe_value($con, $_POST['descriere']);
    $imagine = get_safe_value($con, $_POST['imagine']);
    $longitudine = get_safe_value($con, $_POST['longitudine']);
    $latitudine = get_safe_value($con, $_POST['latitudine']);
    $despre = get_safe_value($con, $_POST['despre']);
    $pret = get_safe_value($con, $_POST['pret']);

    // Verifică dacă destinația există deja
    $res = mysqli_query($con, "SELECT * FROM destinatii WHERE nume_destinatie='$nume_destinatie'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id != $getData['id']) {
                $msg = "Destinația există deja";
            }
        } else {
            $msg = "Destinația există deja";
        }
    }

    // Dacă nu există mesaje de eroare, actualizează sau inserează datele în baza de date
    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            mysqli_query($con, "UPDATE destinatii SET nume_destinatie='$nume_destinatie', tara='$tara', oras='$oras', descriere='$descriere', imagine='$imagine', longitudine='$longitudine', latitudine='$latitudine', despre='$despre', pret='$pret' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO destinatii (nume_destinatie, tara, oras, descriere, imagine, longitudine, latitudine, despre, pret) VALUES ('$nume_destinatie', '$tara', '$oras', '$descriere', '$imagine', '$longitudine', '$latitudine', '$despre', '$pret')");
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
                    <div class="card-header" style="padding-left:80px;"><strong>DESTINATIE</strong></div>
                    <form method="post">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="nume_destinatie" class="form-control-label">Nume Destinație</label>
                                <input type="text" name="nume_destinatie" placeholder="Introduceți numele destinației" class="form-control" required value="<?php echo $nume_destinatie ?>">
                            </div>
                            <div class="form-group">
                                <label for="tara" class="form-control-label">Țara</label>
                                <input type="text" name="tara" placeholder="Introduceți țara" class="form-control" required value="<?php echo $tara ?>">
                            </div>
                            <div class="form-group">
                                <label for="oras" class="form-control-label">Oraș</label>
                                <input type="text" name="oras" placeholder="Introduceți orașul" class="form-control" required value="<?php echo $oras ?>">
                            </div>
                            <div class="form-group">
                                <label for="descriere" class="form-control-label">Descriere</label>
                                <textarea name="descriere" placeholder="Introduceți descrierea destinației" class="form-control" required><?php echo $descriere ?></textarea>
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
                                <label for="despre" class="form-control-label">Despre</label>
                                <textarea name="despre" placeholder="Introduceți detalii despre destinație" class="form-control" required><?php echo $despre ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pret" class="form-control-label">Preț</label>
                                <input type="text" name="pret" placeholder="Introduceți prețul" class="form-control" required value="<?php echo $pret ?>">
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
