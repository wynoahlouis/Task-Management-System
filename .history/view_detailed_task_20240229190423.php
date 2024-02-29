<?php include("./include/header.php"); ?>

<!-- <h1 class="text-center">View Task</h1> -->
    <div class="container mt-4" style="padding-top: 20px; width: 50%; box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px; border-radius: 30px;">
        <div class="row justify-content-center">
            <div class="col-lg-9" style="margin: 0; padding: 30px">

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
                    <h4 style="margin: 10; font-weight: 300px; text-align:center;">TASK INFORMATION</h4>
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label" style="margin: 0; font-weight: 500">Task Title</label>
                        <p style="font-size:150%; font-weight: 200;  text-align: justify;"><?=$user['title'];?></p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label" style="margin: 0; font-weight: 500">Description</label>
                        <p style="font-size:150%; font-weight: 200; text-align: justify;"><?=$user['description'];?></p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="priority" style="margin: 0; font-weight: 500">Priority Level</label>
                        <p style="font-size:150%; font-weight: 200; text-align: justify;"><?=$user['priority'];?></p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="due_date" class="form-label" style="margin: 0; font-weight: 500">Due Date</label>
                        <p style="font-size:150%; font-weight: 200; text-align: justify;"><?=$user['due_date'];?></p>
                    </div>
                    
                    <a href="update_task.php? id=<?=$row['id'];?>" type="button" class="btn btn-warning"  style="margin-right: 20px; border-radius: 20px;" name="updateButton">Edit Task</a>
                    <a href="view_task.php" type="button" class="btn btn-secondary" style="margin-right: 20px; border-radius: 20px;">Cancel</a>

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
        </div>
    </div>

<?php include("./include/footer.php"); ?>
