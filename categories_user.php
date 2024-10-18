<?php
require('top.inc.php');
isAdmin(); // Funcția isAdmin() verifică dacă utilizatorul curent este admin

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
        
        $update_status_sql = "UPDATE users SET status='$status' WHERE id='$id'";
        mysqli_query($con, $update_status_sql);
    }
    
    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM user WHERE id='$id'";
        mysqli_query($con, $delete_sql);
    }
}

$sql = "SELECT * FROM user";
$res = mysqli_query($con, $sql);
?>

<div class="content pb-0">
    <div class="orders">
       <div class="row">
          <div class="col-xl-12">
             <div class="card">
                <div class="card-body">
                   <h4 class="box-title">USERS</h4>
                   <h4 class="box-link"><a href="manage_user.php">ADD USER</a></h4>
                </div>
                <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                      <table class="table">
                         <thead>
                            <tr>
                               <th class="serial">#</th>
                               <th width="2%">ID</th>
                               <th width="20%">Email</th>
                               <th width="20%">Password</th>
                               <th width="26%"></th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php 
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                               <td class="serial"><?php echo $i ?></td>
                               <td><?php echo $row['id'] ?></td>
                               <td><?php echo $row['email'] ?></td>
                               <td><?php echo $row['password'] ?></td>
                               <td>
                                <?php
                                
                                    echo "<span class='badge badge-edit'><a href='manage_user.php?id=" . $row['id'] . "'>Edit</a></span>&nbsp;";
                                    echo "<span class='badge badge-delete'><a href='?type=delete&id=" . $row['id'] . "'>Delete</a></span>";
                                
                                ?>
                               </td>
                            </tr>
                            <?php 
                            $i++;
                            } ?>
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
