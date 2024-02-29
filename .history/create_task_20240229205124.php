<?php include("./include/header.php"); ?>

<div class="container-fluid mt-4" >
<div class="container mt-4" style="padding: 20px; box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px; border-radius: 30px;">
    <div class="row justify-content-center">
        <h3 style="text-align: center;">ADD NEW TASK</h3>
        <div class="col-lg-9">
            <form action="process.php" method="POST">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Task Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                 
                    <div class="col-md-4 mb-3">
                        <label for="priority" class="form-label">Priority Level</label>
                        <select name="priority" id="priority" class="form-control" required>
                            <option value="" disabled-selected style="color: #999;">-Select Priority Level-</option>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>   
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="due_date" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="due_date" name="due_date" required>
                    </div>
                    
                    <div class="col-md-12 mb-3 d-flex justify-content-end">
                    <form method="POST" action="process.php" style="display: flex; justify-content: right;">
                        <input type="hidden" name="id" value="<?=$user['id'];?>">
                        <a href="view_task.php" class="btn btn-secondary" style="margin-right: 20px; border-radius: 20px; width: 20%; padding:8px;">Cancel</a>
                        <button type="submit" class="btn btn-primary" name="insertButton" style="border-radius: 20px; width: 20%; padding:8px;">Add Task</button>
                     </form>
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