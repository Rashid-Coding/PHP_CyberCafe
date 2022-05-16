<?php 
    $title = 'Update Time';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';  


    if(isset($_POST['submit'])){

        $Cust_id = $_POST['Cust_id'];
        $Duration_end = $_POST['Duration_end'];
           
        $isSuccess = $crud->updateBilling($Cust_id, $Duration_end);

        if ($isSuccess){
            echo '<br><br><br><h1 class="text-center text-success">Time has been successfully updated.</h1>';
        }

        else{
            echo '<h1 class="text-center text-danger">Error Found!</h1>';
        }
    }
?>
<br><br><br><br>

<br>
            <div class="card position-absolute top-10 start-50 translate-middle-x" style="width: 18rem">
                <div class="card-body">

                    <h5 class="card-title"><?php echo "Customer ID: " . $_POST["Cust_id"];?></h5>
                    <p class="card-text"><?php echo "<b>Duration_end: </b>" . $_POST['Duration_end']; ?></p>
                    <a href="customer.php" class="btn btn-primary" style = "width:100%">View Customer Table</a>
                </div>
            </div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once 'includes/footer.php'; ?>