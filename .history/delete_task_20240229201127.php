<?php include("./include/header.php"); ?>


<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row" style="padding: 20px; width: 50%; box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px; border-radius: 30px;">
        <div class="col-lg-12">
            <h3 style="text-align: center;">Delete Confirmation</h3>
            <p style="text-align: center;">Are you sure you want to delete this task?</p>
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
            
            <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label" style="margin: 0; font-weight: 500">Task Title</label>
                        <p style="font-size:150%; font-weight: 200;  text-align: justify;"><?=$user['title'];?></p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label" style="margin: 0; font-weight: 500">Description</label>
                        <p style="font-size:150%; font-weight: 200; text-align: justify;"><?=$user['description'];?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="priority" style="margin: 0; font-weight: 500">Priority Level</label>
                        <p style="font-size:150%; font-weight: 200; text-align: justify;"><?=$user['priority'];?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="due_date" class="form-label" style="margin: 0; font-weight: 500">Due Date</label>
                        <p style="font-size:150%; font-weight: 200; text-align: justify;"><?=$user['due_date'];?></p>
                    </div>
                 
                    <a href="view_task.php" type="button" class="btn btn-secondary" style="margin-right: 20px; border-radius: 20px; width:70%; align-self:center;" name="cancelButton">Go Back</a>

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
            
            <form method="POST" action="process.php" style="display: flex; justify-content: center">
                <input type="hidden" name="id" value="<?=$user['id'];?>">
                <a href="view_task.php" class="btn btn-secondary" style="margin-right: 20px; border-radius: 20px;">Cancel</a>
                <button type="submit" class="btn btn-danger" name="deleteButton" style="border-radius: 20px;">Delete</button>
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
