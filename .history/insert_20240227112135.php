<?php include("./include/header.php"); ?>



<h1 class="text-center">Insert Student Data</h1>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <form action="process.php" method="POST">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="studentId" class="form-label">Student I.D</label>
                        <input type="text" class="form-control"  name="student_id">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="middlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="mname">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="birthday">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>


                    <div class="col-md-12 mb-3 text-center">
                        <button type="submit" class="btn btn-primary" name="insertButton" style="float: right;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php include("./include/footer.php"); ?>

