<?php
require('top.inc.php');
isAdmin();
$id = '';
$nume_oras = '';
$iltinerariu = '';
$imagine = '';
$pret_citybreak = '';
$pret_tur = '';
$msg = '';

if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM citybreak_tur WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        $nume_oras = $row['nume_oras'];
        $iltinerariu = $row['iltinerariu'];
        $imagine = $row['imagine'];
        $pret_citybreak = $row['pret_citybreak'];
        $pret_tur = $row['pret_tur'];
    } else {
        header('location:categories_citybreak_tur.php');
        die();
    }
}

if(isset($_POST['submit'])){
    $nume_oras = get_safe_value($con, $_POST['nume_oras']);
    $iltinerariu = get_safe_value($con, $_POST['iltinerariu']);
    $imagine = get_safe_value($con, $_POST['imagine']);
    $pret_citybreak = get_safe_value($con, $_POST['pret_citybreak']);
    $pret_tur = get_safe_value($con, $_POST['pret_tur']);

    // Verifică dacă orașul există deja
    $res = mysqli_query($con, "SELECT * FROM citybreak_tur WHERE nume_oras='$nume_oras'");
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
            mysqli_query($con, "UPDATE citybreak_tur SET nume_oras='$nume_oras', iltinerariu='$iltinerariu', imagine='$imagine', pret_citybreak='$pret_citybreak', pret_tur='$pret_tur' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO citybreak_tur (nume_oras, iltinerariu, imagine, pret_citybreak, pret_tur) VALUES ('$nume_oras', '$iltinerariu', '$imagine', '$pret_citybreak', '$pret_tur')");
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
                                <label for="nume_oras" class="form-control-label">Nume oraș</label>
                                <input type="text" name="nume_oras" placeholder="Introduceți numele orașului" class="form-control" required value="<?php echo $nume_oras ?>">
                            </div>
                            <div class="form-group">
                                <label for="iltinerariu" class="form-control-label">Itinerariu</label>
                                <textarea name="iltinerariu" placeholder="Introduceți itinerariul orașului" class="form-control" required><?php echo $iltinerariu ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imagine" class="form-control-label">Imagine</label>
                                <input type="text" name="imagine" placeholder="Introduceți URL-ul imaginii" class="form-control" required value="<?php echo $imagine ?>">
                            </div>
                            <div class="form-group">
                                <label for="pret_citybreak" class="form-control-label">Pret Citybreak</label>
                                <input type="text" name="pret_citybreak" placeholder="Introduceți prețul pentru citybreak" class="form-control" required value="<?php echo $pret_citybreak ?>">
                            </div>
                            <div class="form-group">
                                <label for="pret_tur" class="form-control-label">Pret Tur</label>
                                <input type="text" name="pret_tur" placeholder="Introduceți prețul pentru tur" class="form-control" required value="<?php echo $pret_tur ?>">
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
