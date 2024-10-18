<?php
require('top.inc.php');
isAdmin(); // Funcția isAdmin() verifică dacă utilizatorul curent este admin

$username = '';
$password = '';
$msg = '';

// Verifică dacă există un ID în URL și preia datele utilizatorului pentru editare
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM users WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $username = $row['username'];
        $password = $row['password'];
    } else {
        header('location: categories_admin.php');
        die();
    }
}

// Procesează datele din formular la trimiterea acestuia
if (isset($_POST['submit'])) {
    $username = get_safe_value($con, $_POST['username']);
    $password = get_safe_value($con, $_POST['password']);
    
    // Verifică dacă username-ul există deja în baza de date pentru alt utilizator
    $res = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
    $check = mysqli_num_rows($res);
    
    if ($check > 0) {
        // Dacă există deja un utilizator cu același username
        if (isset($_GET['id']) && $_GET['id'] != '') {
            // Dacă este mod de editare și username-ul aparține aceluiași utilizator
            $getData = mysqli_fetch_assoc($res);
            if ($id == $getData['id']) {
                // Nu se face nimic, se permite editarea
            } else {
                $msg = "Username already exists";
            }
        } else {
            // Dacă se încearcă adăugarea unui nou utilizator cu un username existent
            $msg = "Username already exists";
        }
    }
    
    // Dacă nu sunt erori, actualizează sau adaugă utilizatorul în baza de date
    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            // Actualizare utilizator existent
            $update_sql = "UPDATE users SET username='$username', password='$password' WHERE id='$id'";
            mysqli_query($con, $update_sql);
        } else {
            // Adăugare utilizator nou
            mysqli_query($con, "INSERT INTO users (username, password, role, status) VALUES ('$username', '$password', 1, 1)");
        }
        
        die();
    }
}
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>USER</strong><small> </small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="username" class=" form-control-label">Username</label>
                                <input type="text" name="username" placeholder="Enter username" class="form-control" required value="<?php echo $username ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class=" form-control-label">Password</label>
                                <input type="text" name="password" placeholder="Enter password" class="form-control" required value="<?php echo $password ?>">
                            </div>
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
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
