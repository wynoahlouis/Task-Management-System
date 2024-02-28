<?php include("./include/header.php"); ?>

<h1 class="text-center">View Student Data</h1>
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
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="title" class="form-label">Task Title</label>
                        <p><?=$user['title'];?></p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <p><?=$user['description'];?></p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="priority">Priority</label>
                        <p><?=$user['priority'];?></p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="due_date" class="form-label">Due Date</label>
                        <p><?=$user['due_date'];?></p>
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
    </div>
</div>

<?php include("./include/footer.php"); ?>
