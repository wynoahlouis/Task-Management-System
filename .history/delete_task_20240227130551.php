<?php include("./include/header.php"); ?>


<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row">
        <div class="col-lg-12">
            <h1>Delete Confirmation</h1>
            <p>Are you sure you want to delete this task?</p>
            <form method="POST" action="process.php">
                <input type="hidden" name="id" value="<?=$user['id'];?>">

                <button type="submit" class="btn btn-danger"  style="float: right;" name="deleteButton">Delete</button>
                <a href="index.php" class="btn btn-secondary" style="float: right;" name="cancelBuutton">Cancel</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
