<?php include("./include/header.php"); ?>
 <div class="container-fluid mt-4">
 <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">TASK MANAGEMENT</h5>

              <a href="create_task.php" style="float: right;" class="btn btn-primary">Add New Task</a>

              <table class="table tasks">
                <thead>
                  <tr>
                    <th class="col">Title</th>
                    <th class="col">Description</th>
                    <th class="col">Priority</th>
                    <th class="col">Due Date</th>
                  </tr>
                </thead>
                <tbody>


                <?php
                $query = "SELECT * FROM `tasks`";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run) > 0)
                {
                foreach($query_run as $row)
                {
                ?>
                    <tr>
                <td><?= $row['title']; ?></td>
                <td><?= $row['description']; ?></td>
                <td><?= $row['priority']; ?></td>
                <td><?= $row['due_date']; ?></td>

                <td>

                <a type="button" class="btn btn-outline-primary" href="new_view_task.php?id=<?=$row['id'];?>">VIEW</a>
                <a type="button" class="btn btn-outline-warning" href="update_task.php?id=<?=$row['id'];?>">UPDATE</a>
                
                <a type="button" class="btn btn-outline-danger"  href="delete_task.php?id=<?=$row['id'];?>">DELETE</button>
                
              </td>
                    </tr>

                    <?php
                } 
                } else
                {
                ?>
                <tr>
                <td colspan="6">No Records Found</td>
                </tr>
                <?php
                }
                ?>

                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section>
 </div>

 <?php include("./include/footer.php"); ?>