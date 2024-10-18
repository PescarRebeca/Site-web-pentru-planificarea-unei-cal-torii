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
        
        $update_status_sql = "UPDATE destinatii SET status='$status' WHERE id='$id'";
        $res = mysqli_query($con, $update_status_sql);
        if (!$res) {
            echo "Eroare la actualizarea statusului: " . mysqli_error($con);
        }
    }

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM destinatii WHERE id='$id'";
        $res = mysqli_query($con, $delete_sql);
        if (!$res) {
            echo "Eroare la ștergerea înregistrării: " . mysqli_error($con);
        }
    }
}

$sql = "SELECT * FROM destinatii";
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
                   <h4 class="box-title">Destinații</h4>
                   <h4 class="box-link"><a href="manage_destinatii.php">Adaugă Destinație</a></h4>
                </div>
                <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                       <table class="table">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>ID</th>
                                    <th>Nume Destinație</th>
                                    <th>Țara</th>
                                    <th>Oraș</th>
                                    <th>Imagine</th>
                                    <th>Descriere</th>
                                    <th>Latitudine</th>
                                    <th>Longitudine</th>
                                    <th>Despre</th>
                                    <th>Preț</th>
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
                                        <td><?php echo $row['nume_destinatie'] ?></td>
                                        <td><?php echo $row['tara'] ?></td>
                                        <td><?php echo $row['oras'] ?></td>
                                        <td><img src="<?php echo $row['imagine'] ?>" alt="Imagine destinație" style="width: 100px;"></td>
                                        <td><?php echo truncateText($row['descriere'], 50) ?></td>
                                        <td><?php echo $row['latitudine'] ?></td>
                                        <td><?php echo $row['longitudine'] ?></td>
                                        <td data-description-id="<?php echo $row['id'] ?>">
                                            <div class="truncate-text"><?php echo truncateText($row['despre'], 50) ?></div>
                                            <?php if (strlen($row['despre']) > 50): ?>
                                                <button class="show-more" data-id="<?php echo $row['id'] ?>">Afișează mai mult</button>
                                                <div class="full-description" style="display: none;"><?php echo $row['despre'] ?></div>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo $row['pret'] ?></td>
                                        <td>
                                            <?php
                                            echo "<span class='badge badge-edit'><a href='manage_destinatii.php?id=" . $row['id'] . "'>Editare</a></span>&nbsp;";
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
