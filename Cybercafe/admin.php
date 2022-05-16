
<?php 
    $title = 'Admin';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    $results = $crud->getCompadmin();

?>

<div class="position-absolute top-10 start-50 translate-middle-x">
<br><br>
    <h1><u>Admin Overview</u></h1>
    <br>
</div>
<br><br><br><br>

    <div class="container">
        <br>
            <table class = "table">
            <thead class="table-secondary">
                <tr>
                    <th>ADMIN_ID</th>
                    <th>WORKING HOUR</th>
                    <th>COMP_ID</th>
                </tr>
            </thead>
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $r['Admin_ID'] ?></td>
                        <td><?php echo $r['Admin_WorkingHour'] ?></td>
                        <td><?php echo $r['Comp_id'] ?></td>
                    </tr>
                <?php }?>

            </table>

            <br>
               

                <div class="position-absolute top-10 start-50 translate-middle-x">
                    <a href="mainAdmin.php" class="btn btn-primary">Back</a> 
                    <a href="insertAdmin.php" class="btn btn-secondary">Insert</a>
                    <a href="U_Admin.php" class="btn btn-success">Update</a>
                    <a href="deleteAdmin.php" class="btn btn-danger">Delete</a>
                </div>



    </div>
                


<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
