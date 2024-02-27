<?php
session_start();

if(isset($_POST["deleteButton"])){

    $id = $_POST['id'];
   
    $delete_query = "DELETE FROM `tasks` WHERE `id` = '$id'";
    $delete_result = mysqli_query($con, $delete_query);

    if($delete_result){
            $_SESSION['status'] = "Deleted Successfully!";
            $_SESSION['status_code'] = "success";
            header("Location: index.php");
            exit();
    }else{
        $_SESSION['status'] = "Error";
        $_SESSION['status_code'] = "error";
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Confirmation</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row">
        <div class="col-lg-12">
            <h1>Delete Confirmation</h1>
            <p>Are you sure you want to delete this task?</p>
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?=$user['id'];?>">

                <button type="submit" class="btn btn-danger"  style="float: right;" name="deleteButton">Delete</button>
                <!-- <a href="process.php" class="btn btn-danger" style="float: right;" name="deleteButton">Delete</a> -->
                <a href="index.php" class="btn btn-secondary" style="float: right;" name="cancelButton">Cancel</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
