<?php
require('top.inc.php');

// Verificare dacă utilizatorul este administrator
isAdmin();

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
        
        $update_status_sql = "UPDATE hoteluri SET status='$status' WHERE id='$id'";
        $res = mysqli_query($con, $update_status_sql);
        if (!$res) {
            echo "Eroare la actualizarea statusului: " . mysqli_error($con);
        }
    }

    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM hoteluri WHERE id='$id'";
        $res = mysqli_query($con, $delete_sql);
        if (!$res) {
            echo "Eroare la ștergerea înregistrării: " . mysqli_error($con);
        }
    }
}

$sql = "SELECT * FROM hoteluri";
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
                   <h4 class="box-title">Hoteluri</h4>
                   <h4 class="box-link"><a href="manage_hoteluri.php">Adaugă Hotel</a></h4>
                </div>
                <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                       <table class="table">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>ID</th>
                                    <th>Nume Hotel</th>
                                    <th>Preț</th>
                                    <th>Oraș</th>
                                    <th>Link Booking</th>
                                    <th>Imagine</th>
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
                                        <td><?php echo $row['nume_hotel'] ?></td>
                                        <td><?php echo $row['pret'] ?></td>
                                        <td><?php echo $row['oras'] ?></td>
                                        <td><a href="<?php echo $row['link_booking'] ?>" target="_blank">Rezervă aici</a></td>
                                        <td><img src="<?php echo $row['imagine_url'] ?>" alt="Imagine hotel" style="width: 100px;"></td>
                                        <td>
                                            <?php
                                            echo "<span class='badge badge-edit'><a href='manage_hoteluri.php?id=" . $row['id'] . "'>Editare</a></span>&nbsp;";
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
require('footer.inc.php');
?>
