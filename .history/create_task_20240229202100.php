<?php include("./include/header.php"); ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
<h1 class="text-center">ADD NEW TASK</h1>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <form action="process.php" method="POST">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Task Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                 
                    <div class="col-md-4 mb-3">
                        <label for="priority" class="form-label">Priority Level</label>
                        <select name="priority" id="priority" class="form-control">
                            <option value="" disabled-selected style="color: #999;">-Select Priority Level-</option>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>   
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="due_date" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="due_date" name="due_date">
                    </div>

                    <div class="col-md-12 mb-3 text-center">
                        <button type="submit" class="btn btn-primary" name="insertButton" style="float: right;">Add Task</button>
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