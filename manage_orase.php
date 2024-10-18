<?php
require('top.inc.php');
isAdmin();
$id = '';
$nume = '';
$tara = '';
$descriere = '';
$imagine = '';
$longitudine = '';
$latitudine = '';
$despre = '';
$msg = '';

if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM orase WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        $nume = $row['nume'];
        $tara = $row['tara'];
        $descriere = $row['descriere'];
        $imagine = $row['imagine'];
        $longitudine = $row['longitudine'];
        $latitudine = $row['latitudine'];
        $despre = $row['despre'];
    } else {
        header('location:categories_orase.php');
        die();
    }
}

if(isset($_POST['submit'])){
    $nume = get_safe_value($con, $_POST['nume']);
    $tara = get_safe_value($con, $_POST['tara']);
    $descriere = get_safe_value($con, $_POST['descriere']);
    $imagine = get_safe_value($con, $_POST['imagine']);
    $longitudine = get_safe_value($con, $_POST['longitudine']);
    $latitudine = get_safe_value($con, $_POST['latitudine']);
    $despre = get_safe_value($con, $_POST['despre']);

    // Verifică dacă orașul există deja
    $res = mysqli_query($con, "SELECT * FROM orase WHERE nume='$nume'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        if(isset($_GET['id']) && $_GET['id'] != ''){
            $getData = mysqli_fetch_assoc($res);
            if($id != $getData['id']){
                $msg = "City already exists";
            }
        } else {
            $msg = "City already exists";
        }
    }

    // Dacă nu există mesaje de eroare, actualizează sau inserează datele în baza de date
    if($msg == ''){
        if(isset($_GET['id']) && $_GET['id'] != ''){
            mysqli_query($con, "UPDATE orase SET nume='$nume', tara='$tara', descriere='$descriere', imagine='$imagine', longitudine='$longitudine', latitudine='$latitudine', despre='$despre' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO orase (nume, tara, descriere, imagine, longitudine, latitudine, despre) VALUES ('$nume', '$tara', '$descriere', '$imagine', '$longitudine', '$latitudine', '$despre')");
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
                    <div class="card-header" style="padding-left:80px;"><strong>ORAȘ</strong> </div>
                    <form method="post">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="nume" class="form-control-label">Nume</label>
                                <input type="text" name="nume" placeholder="Introduceți numele orașului" class="form-control" required value="<?php echo $nume ?>">
                            </div>
                            <div class="form-group">
                                <label for="tara" class="form-control-label">Țara</label>
                                <input type="text" name="tara" placeholder="Introduceți țara" class="form-control" required value="<?php echo $tara ?>">
                            </div>
                            <div class="form-group">
                                <label for="descriere" class="form-control-label">Descriere</label>
                                <textarea name="descriere" placeholder="Introduceți descrierea orașului" class="form-control" required><?php echo $descriere ?></textarea>
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
                                <textarea name="despre" placeholder="Introduceți detalii despre oraș" class="form-control" required><?php echo $despre ?></textarea>
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
