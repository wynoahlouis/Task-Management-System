<?php include("./include/header.php"); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 text-center">
            <h1>Welcome to TaskManager</h1>
            <p>Manage your task now!</p>
            <a href="view_task.php" class="btn btn-primary" style="border-radius:30px; padding: 10px; width:30%">Start Now</a>
        </div>
        <div class="col-md-6 text-center" >
            <img src="logo_tm2.png" alt="Task Manager Logo" style="width: 120%; margin-top: -20px;">
        </div>
    </div>
</div>


<style>
    .container {
        display: flex;
        align-items: center;
        height: 100vh; /* Set container height to viewport height for full-screen centering */
    }

    .row {
        width: 100%; /* Ensure row takes up full width */
    }
</style>

<?php include("./include/footer.php"); ?>
