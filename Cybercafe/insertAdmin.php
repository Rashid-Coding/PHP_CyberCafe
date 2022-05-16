<?php 
    $title = 'Insert Admin';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    
    
?>

<div class="position-absolute top-10 start-50 translate-middle-x">
<br><br>
    <h1><u>Insert New Admin</u></h1>
    <br>
</div>
<br><br><br><br><br>
<div class="position-absolute top-10 start-50 translate-middle-x">

            <form method = "post" action = "successInsertAdmin.php">
            <div class="mb-3">
                <label for="Admin_ID" class="form-label">Admin ID </label>
                <input type="number" class="form-control" id="Admin_ID" placeholder = "---" name ="Admin_ID">
            </div>
            <div class="mb-3">
                <label for="Admin_WorkingHour" class="form-label">Admin Working Hour</label>
                <input type="number" class="form-control" id="Admin_WorkingHour" name="Admin_WorkingHour">
            </div>
            <div class="mb-3">
                <label for="Comp_id" class="form-label">Computer ID</label>
                <input type="number" class="form-control" id="Comp_id" placeholder = "1-40" name="Comp_id">
            </div>

            <button type="submit" name="submit" class="btn btn-primary" style="width:100%">Submit</button>
            </form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once 'includes/footer.php'; ?>