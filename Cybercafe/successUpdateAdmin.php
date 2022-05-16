<?php 
    $title = 'Login';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';  


    if(isset($_POST['submit'])){
        $Admin_ID = $_POST['Admin_ID'];
        $Admin_WorkingHour = $_POST['Admin_WorkingHour'];
        $Comp_id = $_POST['Comp_id'];
           
        $isSuccess = $crud->updateAdmin($Admin_ID, $Admin_WorkingHour, $Comp_id);

        if ($isSuccess){
            echo '<br><br><br><h1 class="text-center text-success">Admin has been successfully updated.</h1>';
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
                    <h5 class="card-title"><?php echo "Admin ID: " . $_POST["Admin_ID"];?></h5>
                    <p class="card-text"><?php echo "<b>Admin Working Hour: </b>" . $_POST['Admin_WorkingHour']; ?></p>
                    <p class="card-text"><?php echo "<b>Computer ID: </b>" . $_POST['Comp_id']; ?></p>
                    <a href="admin.php" class="btn btn-primary" style = "width:100%">View Admin Table</a>
                </div>
            </div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once 'includes/footer.php'; ?>