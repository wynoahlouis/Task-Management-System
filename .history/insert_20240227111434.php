<?php include("./include/header.php"); ?>

<div class="container-fluid mt-4">
<h1 class="text-center">ADD NEW TASK</h1>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <form action="">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Task Title</label>
                        <input type="text" class="form-control" id="title">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <input type="text" class="form-control" id="priority">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dateOfBirth">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="text" class="form-control" id="email">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="Phone Number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="Phone Number">
                    </div>

                    <div class="col-md-12 mb-3 text-center">
                        <button type="submit" class="btn btn-primary"  style="float: right;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
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