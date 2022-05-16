
    <?php 
        $title = 'Main Admin';
        require_once 'includes/header.php'; ?>

        <br><br><br>
 
        <div style = "margin: auto" class="position-absolute top-10 start-50 translate-middle-x row">
        <h1 class = "text-center"><u>Administrator</u></h1> 
            <!-- <button type="button" class="btn btn-secondary btn-lg">Large button</button>
            <button type="button" class="btn btn-secondary btn-lg">Large button</button> -->
            
            <div class="card" style="width: 15rem;">
                <br>
                <img src="Gambar/admin.png" class="card-img-top" alt="admin" style = "height:100%">
                <div class="card-body">
                    <a href="admin.php" class="btn btn-primary" style = "width:100%">Admin Overview</a>
                </div>
            </div>
            
            <div class="card" style="width: 15rem;">
                <br>
                <img src="Gambar/billing.png" class="card-img-top" alt="billing">
                <div class="card-body">
                    <a href="billing.php" class="btn btn-primary" style = "width:100%">Billing</a>
                </div>
            </div>

            <div class="card" style="width: 15rem;">
                <br>
                <img src="Gambar/computer.png" class="card-img-top" alt="computer">
                <div class="card-body">
                    <a href="computer.php" class="btn btn-primary" style = "width:100%">Computer</a>
            </div>
            </div>
            
        </div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php require_once 'includes/footer.php'; ?>
