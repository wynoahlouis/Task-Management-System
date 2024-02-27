<?php include("./include/header.php"); ?>

<h1 class="text-center">Update Student Data</h1>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">

        <?php
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $users = "SELECT * FROM `tasks` WHERE `id` = '$id'";
            $users_run = mysqli_query($con, $users);

            if(mysqli_num_rows($users_run) > 0)
            {
                foreach($users_run as $user)
                {
                ?>

            <form action="process.php" method="POST">

            <input type="hidden" name="id" value="<?=$user['id'];?>">

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Task Title</label>
                        <input type="text" class="form-control" id="title" value="<?=$user['title'];?>" name="title">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" value="<?=$user['description'];?>" name="description">
                    </div>

                    <!-- <div class="col-md-4 mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <input type="text" class="form-control" id="priority" value="<?=$user['priority'];?>" name="priority">
                    </div> -->

                    <div class="col-md-4 mb-3">
                        <label for="priority">Priority</label>
                        <select name="priority" id="priority" class="form-control" name="priority" value="<?=$user['priority'];?>" name="priority" required>
                            <!-- <option value="">Select Priority</option> -->
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>   
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="due_date" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="due_date" value="<?=$user['due_date'];?>" name="due_date">
                    </div>


                    <div class="col-md-12 mb-3 text-center">
                        <button type="submit" class="btn btn-primary"  style="float: right;" name="updateButton">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
                }
            }
            else
            {
                ?>
                <h4>No Record Found!</h4>
                <?php
            }
        }
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>


<?php include("./include/footer.php"); ?>
