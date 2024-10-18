<?php
require('top.inc.php');

// Verificare dacă utilizatorul este administrator (presupunând că isAdmin() face această verificare)
// isAdmin(); // Poți comenta această linie dacă nu ai implementat încă această funcționalitate

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);

    if ($type == 'status') {
        $operation = get_safe_value($con, $_GET['operation']);
        $id = get_safe_value($con, $_GET['id']);
        
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        
        $update_status_sql = "UPDATE citybreak_tur SET status='$status' WHERE id='$id'";
        $res = mysqli_query($con, $update_status_sql);
        if (!$res) {
            echo "Eroare la actualizarea statusului: " . mysqli_error($con);
        }
    }

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM citybreak_tur WHERE id='$id'";
        $res = mysqli_query($con, $delete_sql);
        if (!$res) {
            echo "Eroare la ștergerea înregistrării: " . mysqli_error($con);
        }
    }
}

$sql = "SELECT * FROM citybreak_tur";
$res = mysqli_query($con, $sql);
if (!$res) {
    echo "Eroare la extragerea datelor: " . mysqli_error($con);
}
?>

<div class="content pb-0">
    <div class="orders">
       <div class="row">
          <div class="col-xl-12">
             <div class="card">
                <div class="card-body" style="padding-left:80px;">
                   <h4 class="box-title">City Break și Tur</h4>
                   <h4 class="box-link"><a href="manage_citybreak_tur.php">Adaugă </a></h4>
                </div>
                <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                       <table class="table">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>ID</th>
                                    <th>Nume Oraș</th>
                                    <th>Itinerariu</th>
                                    <th>Imagine</th>
                                    <th>Pret City Break</th>
                                    <th>Pret Tur</th>
                                    <th>Acțiune</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tr>
                                        <td class="serial"><?php echo $i ?></td>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['nume_oras'] ?></td>
                                        <td><?php echo truncateText($row['iltinerariu'], 50) ?></td>
                                        <td><img src="<?php echo $row['imagine'] ?>" alt="Imagine oraș" style="width: 100px;"></td>
                                        <td><?php echo $row['pret_citybreak'] ?></td>
                                        <td><?php echo $row['pret_tur'] ?></td>
                                        <td>
                                            <?php
                                            echo "<span class='badge badge-edit'><a href='manage_citybreak_tur.php?id=" . $row['id'] . "'>Editare</a></span>&nbsp;";
                                            echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Ștergere</a></span>";
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const showMoreButtons = document.querySelectorAll('.show-more');

    showMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const descriptionCell = document.querySelector(`[data-description-id="${id}"]`);
            const fullDescription = descriptionCell.querySelector('.full-description').textContent;
            descriptionCell.innerHTML = fullDescription;
        });
    });
});
</script>

<?php
function truncateText($text, $limit = 100) {
    // Verificăm dacă textul este mai lung decât limita specificată
    if (strlen($text) > $limit) {
        // Tăiem textul la limita specificată și adăugăm "..." la sfârșit
        $text = substr($text, 0, $limit) . '...';
    }
    return $text;
}
?>
<?php
require('footer.inc.php');
?>
