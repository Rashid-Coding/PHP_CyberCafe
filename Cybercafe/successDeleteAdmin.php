<?php 
    $title = 'Login';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';  


    if(isset($_POST['submit'])){
        $Admin_ID = $_POST['Admin_ID'];

           
        $isSuccess = $crud->deleteAdmin($Admin_ID);

        if ($isSuccess){
            echo '<br><br><br><br><h1 class="text-center text-danger">Admin has been successfully deleted.</h1>';
        }

        else{
            echo '<h1 class="text-center text-danger">Error Found!</h1>';
        }
    }
?>
<br><br>

<br>
            <div class="card position-absolute top-10 start-50 translate-middle-x" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "Admin ID: " . $_POST["Admin_ID"];?></h5>
                    <a href="admin.php" class="btn btn-primary" style = "width:100%">View Admin Table</a>
                </div>
            </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once 'includes/footer.php'; ?>