<?php 
    $title = 'Login';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';  
    $results = $crud->searchCust();
?>
<br><br><br><br>

<br>
<div class="container">
            <br>
                    <table class = "table">
                    <thead class="table-secondary">
                        <tr>
                            <th>COMP_ID</th>
                            <th>CUST_ID</th>
                            <th>BIL_ID</th>
                            <th>CUST_PWD</th>
                            <th>STATUS</th>
                            <th>START_DATE</th>
                            <th>END_DATE</th>
                            <th>TYPE_BILL</th>
                            <th>TIME_START</th>
                            <th>TIME_END</th>
                        </tr>
                    </thead>
                        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><?php echo $r['Comp_id'] ?></td>
                                <td><b><?php echo $r['Cust_id'] ?></b></td>
                                <td><?php echo $r['Bil_ID'] ?></td>
                                <td><?php echo $r['Cust_password'] ?></td>
                                <td><?php echo $r['Cust_status'] ?></td>
                                <td><?php echo $r['Customer_startDate'] ?></td>
                                <td><?php echo $r['Customer_endDate'] ?></td>
                                <td><?php echo $r['type_bil'] ?></td>
                                <td><?php echo $r['Duration_start'] ?></td>
                                <td><?php echo $r['Duration_end'] ?></td>
                            </tr>
                        <?php }?>

                    </table>
        </div>

        <div class="position-absolute top-10 start-50 translate-middle-x">
            <a href="customer.php" class="btn btn-primary">Back</a>
            <a href="U_Billing.php" class="btn btn-success">Update Time End</a>
        </div>


<br><br><br><br><br><br><br><br><br><br>
<?php require_once 'includes/footer.php'; ?>