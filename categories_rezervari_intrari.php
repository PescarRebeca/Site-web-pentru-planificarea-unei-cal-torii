<?php
require('top.inc.php');

// Verificare dacă utilizatorul este administrator (presupunând că isAdmin() face această verificare)
// isAdmin(); // Poți comenta această linie dacă nu ai implementat încă această funcționalitate

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM rezervari_intrari WHERE id='$id'";
        $res = mysqli_query($con, $delete_sql);
        if (!$res) {
            echo "Eroare la ștergerea înregistrării: " . mysqli_error($con);
        }
    }
}

$sql = "SELECT * FROM rezervari_intrari";
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
                   <h4 class="box-title">Rezervări Intrări</h4>
                </div>
                <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                       <table class="table">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>ID</th>
                                    <th>Nume Complet</th>
                                    <th>Data Intrare</th>
                                    <th>Ora Intrare</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Usermail</th>
                                    <th>Acțiuni</th>
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
                                        <td><?php echo htmlspecialchars($row['data_intrare']) ?></td>
                                        <td><?php echo htmlspecialchars($row['ora_intrare']) ?></td>
                                        <td><?php echo htmlspecialchars($row['telefon']) ?></td>
                                        <td><?php echo htmlspecialchars($row['email']) ?></td>
                                        <td><?php echo htmlspecialchars($row['usermail']) ?></td>
                                        <td>
                                            <span class='badge badge-delete'><a href='?type=delete&id=<?php echo $row['id'] ?>'>Ștergere</a></span>
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
require('footer.inc.php');
?>
