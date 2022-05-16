<?php 
    $title = 'Update Time';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    
    
?>

<div class="position-absolute top-10 start-50 translate-middle-x">
<br><br><br><br>
    <h1><u>Update the End Time</u></h1>
    <br>
</div>
<br><br><br><br><br><br><br><br>
<div class="position-absolute top-10 start-50 translate-middle-x">

            <form method = "post" action = "successUpdateBilling.php">

            <div class="mb-3">
                <label for="Cust_id" class="form-label">Customer ID</label>
                <input type="number" class="form-control" id="Cust_id" placeholder = "---" name="Cust_id">
            </div>
            <div class="mb-3">
                <label for="Duration_end" class="form-label">End Time</label>
                <input type="text" class="form-control" id="Duration_end" placeholder = '"00:00"' name="Duration_end">
            </div>
            <button type="submit" name="submit" class="btn btn-dark" style="width:100%">Submit</button>
            </form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once 'includes/footer.php'; ?>