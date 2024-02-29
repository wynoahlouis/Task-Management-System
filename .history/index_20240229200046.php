<?php include("./include/header.php"); ?>

<style>
    .container {
        display: flex;
        align-items: center;
        height: 100vh;
        justify-content: center;
    }

    .row {
        width: 100%;
        height: 100%; /* Set the height to 100% */
    }
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 text-center">
            <h3>Welcome to TaskManager</h3>
            <p>Manage your task now!</p>
            <a href="view_task.php" class="btn btn-primary" style="border-radius:30px; padding: 10px; width:30%">Start Now</a>
        </div>
        <div class="col-md-6 text-center" >
            <img src="logo_tm2.png" alt="Task Manager Logo" style="max-width: 100%; max-height: 100%;">
        </div>
    </div>
</div>

<?php include("./include/footer.php"); ?>
