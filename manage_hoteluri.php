<?php
require('top.inc.php');
isAdmin();
$id = '';
$nume_hotel = '';
$pret = '';
$oras = '';
$link_booking = '';
$imagine_url = '';
$msg = '';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM hoteluri WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $nume_hotel = $row['nume_hotel'];
        $pret = $row['pret'];
        $oras = $row['oras'];
        $link_booking = $row['link_booking'];
        $imagine_url = $row['imagine_url'];
    } else {
        header('location:categories_hoteluri.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $nume_hotel = get_safe_value($con, $_POST['nume_hotel']);
    $pret = get_safe_value($con, $_POST['pret']);
    $oras = get_safe_value($con, $_POST['oras']);
    $link_booking = get_safe_value($con, $_POST['link_booking']);
    $imagine_url = get_safe_value($con, $_POST['imagine_url']);

    // Verifică dacă hotelul există deja
    $res = mysqli_query($con, "SELECT * FROM hoteluri WHERE nume_hotel='$nume_hotel'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id != $getData['id']) {
                $msg = "Hotelul există deja";
            }
        } else {
            $msg = "Hotelul există deja";
        }
    }

    // Dacă nu există mesaje de eroare, actualizează sau inserează datele în baza de date
    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            mysqli_query($con, "UPDATE hoteluri SET nume_hotel='$nume_hotel', pret='$pret', oras='$oras', link_booking='$link_booking', imagine_url='$imagine_url' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO hoteluri (nume_hotel, pret, oras, link_booking, imagine_url) VALUES ('$nume_hotel', '$pret', '$oras', '$link_booking', '$imagine_url')");
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
                    <div class="card-header" style="padding-left:80px;"><strong>HOTEL </strong></div>
                    <form method="post">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="nume_hotel" class="form-control-label">Nume Hotel</label>
                                <input type="text" name="nume_hotel" placeholder="Introduceți numele hotelului" class="form-control" required value="<?php echo $nume_hotel ?>">
                            </div>
                            <div class="form-group">
                                <label for="pret" class="form-control-label">Preț</label>
                                <input type="text" name="pret" placeholder="Introduceți prețul" class="form-control" required value="<?php echo $pret ?>">
                            </div>
                            <div class="form-group">
                                <label for="oras" class="form-control-label">Oraș</label>
                                <input type="text" name="oras" placeholder="Introduceți orașul" class="form-control" required value="<?php echo $oras ?>">
                            </div>
                            <div class="form-group">
                                <label for="link_booking" class="form-control-label">Link Booking</label>
                                <input type="text" name="link_booking" placeholder="Introduceți link-ul de booking" class="form-control" required value="<?php echo $link_booking ?>">
                            </div>
                            <div class="form-group">
                                <label for="imagine_url" class="form-control-label">Imagine URL</label>
                                <input type="text" name="imagine_url" placeholder="Introduceți URL-ul imaginii" class="form-control" required value="<?php echo $imagine_url ?>">
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
