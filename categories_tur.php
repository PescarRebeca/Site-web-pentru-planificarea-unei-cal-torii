<?php
require('top.inc.php');

// Verificare dacă utilizatorul este administrator (presupunând că isAdmin() face această verificare)
// isAdmin(); // Poți comenta această linie dacă nu ai implementat încă această funcționalitate

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM rezervaritur WHERE id='$id'";
        $res = mysqli_query($con, $delete_sql);
        if (!$res) {
            echo "Eroare la ștergerea înregistrării: " . mysqli_error($con);
        }
    }
}

$sql = "SELECT * FROM rezervaritur";
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
                   <h4 class="box-title">Rezervări Tur</h4>
                </div>
                <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                       <table class="table">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>ID</th>
                                    <th>Nume Complet</th>
                                    <th>Email</th>
                                    <th>Telefon</th>
                                    <th>Număr Adulți</th>
                                    <th>Număr Copii</th>
                                    <th>Data Tur</th>
                                    <th>Oraș Ales</th>
                                    <th>Mesaj</th>
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
                                        <td><?php echo htmlspecialchars($row['nume_complet']) ?></td>
                                        <td><?php echo htmlspecialchars($row['email']) ?></td>
                                        <td><?php echo htmlspecialchars($row['telefon']) ?></td>
                                        <td><?php echo htmlspecialchars($row['nr_adulti']) ?></td>
                                        <td><?php echo htmlspecialchars($row['nr_copii']) ?></td>
                                        <td><?php echo htmlspecialchars($row['data_tur']) ?></td>
                                        <td><?php echo htmlspecialchars($row['oras']) ?></td>
                                        <td><?php echo truncateText(htmlspecialchars($row['mesaj']), 50) ?></td>
                                        <td>
                                            <?php
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
