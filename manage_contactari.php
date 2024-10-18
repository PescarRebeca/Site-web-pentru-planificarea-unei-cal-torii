<?php
require('top.inc.php');

$id = '';
$name = '';
$email = '';
$phone = '';
$message = '';
$msg = '';

// Verifică dacă este setat un ID în query string și nu este gol
if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM contactări WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if($check > 0){
        $row = mysqli_fetch_assoc($res);
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $message = $row['message'];
    } else {
        header('location:categories_contactari.php');
        die();
    }
}

// Verifică dacă formularul a fost trimis
if(isset($_POST['submit'])){
    $name = get_safe_value($con, $_POST['name']);
    $email = get_safe_value($con, $_POST['email']);
    $phone = get_safe_value($con, $_POST['phone']);
    $message = get_safe_value($con, $_POST['message']);

    // Validare și inserare/update în baza de date
    if($name != '' && $email != '' && $phone != '' && $message != ''){
        if(isset($_GET['id']) && $_GET['id'] != ''){
            mysqli_query($con, "UPDATE contactări SET name='$name', email='$email', phone='$phone', message='$message' WHERE id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO contactări (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')");
        }
        
        die();
    } else {
        $msg = "Vă rugăm să completați toate câmpurile.";
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
                    <div class="card-header"><strong>Contactări</strong></div>
                    <div class="card-body card-block">
                        <form method="post">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Nume</label>
                                <input type="text" id="name" name="name" placeholder="Introduceți numele complet" class="form-control" required value="<?php echo $name ?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input type="email" id="email" name="email" placeholder="Introduceți adresa de email" class="form-control" required value="<?php echo $email ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-control-label">Telefon</label>
                                <input type="text" id="phone" name="phone" placeholder="Introduceți numărul de telefon" class="form-control" required value="<?php echo $phone ?>">
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-control-label">Mesaj</label>
                                <textarea id="message" name="message" placeholder="Introduceți mesajul" class="form-control" required><?php echo $message ?></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Trimite</button>
                            <div class="field_error"><?php echo $msg ?></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('footer.inc.php');
?>
