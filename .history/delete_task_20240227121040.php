<?php
// delete_task.php

// Check if task ID is provided in the URL
if(isset($_GET['id'])) {
    $taskId = $_GET['id'];
    // Fetch task details from the database based on task ID
    // You should implement this part based on your database structure
    // $taskDetails = fetchTaskDetails($taskId);
} else {
    // If task ID is not provided, redirect to index.php or any other page
    header("Location: index.php");
    exit(); // Ensure script execution stops here
}

// If confirmation is received, delete the task
if(isset($_POST['confirm'])) {
    // Implement deletion logic here
    // deleteTask($taskId); // This should be a function to delete the task from your database
    // After deleting the task, you might want to redirect the user back to the main page
    header("Location: index.php");
    exit(); // Ensure script execution stops here
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirmation Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Confirmation</h1>
            <p>Are you sure you want to delete this task?</p>
            <form method="POST">
                <!-- Hidden input field to pass task ID -->
                <input type="hidden" name="taskId" value="<?= $taskId ?>">
                <button type="submit" class="btn btn-danger" name="confirm">Confirm</button>
                <a href="index.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
