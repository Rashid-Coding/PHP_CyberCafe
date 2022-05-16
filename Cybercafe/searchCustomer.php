<?php 
    $title = 'Search Customer';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    
    
?>
        <br><br><br>
        <div class="position-absolute top-10 start-50 translate-middle-x">
        <br><br>
            <h1><u>Search Customer</u></h1>
            <br>
        </div>
        <br><br><br><br><br>
        <div class="position-absolute top-10 start-50 translate-middle-x">

                    <form method = "post" action = "successCustomer.php">
                    <div class="mb-3">
                        <label for="Cust_id" class="form-label">Customer ID </label>
                        <input type="text" class="form-control" id="name" placeholder = "---" name ="Cust_id">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%">Submit</button>
                    </form>
        </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once 'includes/footer.php'; ?>