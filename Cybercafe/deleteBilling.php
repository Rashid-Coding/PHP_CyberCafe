<?php 
    $title = 'Delete Billing';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    
    
?>
<br><br><br> 
<div class="position-absolute top-10 start-50 translate-middle-x">
<br><br>
    <h1><u>Delete Row in Billing Table</u></h1>
    <br>
</div>
<br><br><br><br><br>
<div class="position-absolute top-10 start-50 translate-middle-x">

            <form method = "post" action = "successDeleteBilling.php">
            <div class="mb-3">
                <label for="Bil_ID" class="form-label">Billing ID </label>
                <input type="number" class="form-control" id="Bil_ID" placeholder = "---" name ="Bil_ID">

<br>
            <button type="submit" name="submit" class="btn btn-primary" style="width:100%">Submit</button>
            </form>
</div>


<br><br><br><br><br><br><br><br> 
<?php require_once 'includes/footer.php'; ?>