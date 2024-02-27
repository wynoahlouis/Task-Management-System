<?php include("./include/header.php"); ?>


<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row">
        <div class="col-lg-12">
            <h1>Delete Confirmation</h1>
            <p>Are you sure you want to delete this task?</p>
            <form method="POST" action="process.php">
                <input type="hidden" name="id" value="<?=$user['id'];?>">

                <button type="submit" class="btn btn-danger"  style="float: right;" name="deleteButton">Delete</button>
                <a href="index.php" class="btn btn-secondary" style="float: right;" name="cancelButton">Cancel</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>


<?php include("./include/footer.php"); ?>