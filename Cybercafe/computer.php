
<?php 
    $title = 'Computer';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    $results = $crud->getComp();
        
?>

<div class="position-absolute top-10 start-50 translate-middle-x">
<br><br>
    <h1><u>Computer Overview</u></h1>
    <br>
</div>
<br><br><br><br>
    <div class="container">
        <br>
        <table class = "table">

        <thead class="table-secondary">
            <tr>
                <th>COMP_ID</th>
                <th>COMP_CURRENT</th>
                <th>COMP_AFTER</th>
            </tr>
        </thead>
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $r['Comp_id'] ?></td>
                    <td><?php echo $r['Comp_current'] ?></td>
                    <td><?php echo $r['Comp_after'] ?></td>
                </tr>
            <?php }?>

        </table>
    </div>

        <div class="position-absolute top-10 start-50 translate-middle-x">
        <a href="mainAdmin.php" class="btn btn-primary">Back</a>
        </div>

<br><br><br>
<?php require_once 'includes/footer.php'; ?>

