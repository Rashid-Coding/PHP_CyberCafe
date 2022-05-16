
<?php 
    $title = 'Billing';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    $results = $crud->getBill();

?>

<div class="position-absolute top-10 start-50 translate-middle-x">
<br><br>
    <h1><u>Billing Overview</u></h1>
    <br>
</div>
<br><br><br><br>
        <div class="container">
            <br>
                <table class = "table">
                <thead class="table-secondary">
                    <tr>
                        <th>BILL_ID</th>
                        <th>CUST_ID</th>
                        <th>COMP_ID</th>
                        <th>ADMIN_ID</th>
                        <th>TYPE_BILL</th>
                        <th>TIME_START</th>
                        <th>TIME_END</th>
                    </tr>
                </thead>
                    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $r['Bil_ID'] ?></td>
                            <td><?php echo $r['Cust_id'] ?></td>
                            <td><?php echo $r['Comp_id'] ?></td>
                            <td><?php echo $r['Admin_ID'] ?></td>
                            <td><?php echo $r['type_bil'] ?></td>
                            <td><?php echo $r['Duration_start'] ?></td>
                            <td><?php echo $r['Duration_end'] ?></td>
                        </tr>
                    <?php }?>

                </table>
        </div>

        <div class="position-absolute top-10 start-50 translate-middle-x">
            <a href="mainAdmin.php" class="btn btn-primary">Back</a>
            <a href="deleteBilling.php" class="btn btn-danger">Delete</a>
        </div>

        <br><br>
<?php require_once 'includes/footer.php'; ?>