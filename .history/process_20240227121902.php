<?php
session_start();    
include("config.php");


if(isset($_POST["insertButton"])){

    // $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];


    
    $insert_query = "INSERT INTO `tasks`(`title`, `description`, `priority`, `due_date`) VALUES ('$title','$description','$priority','$due_date')";
    $insert_result = mysqli_query($con, $insert_query);

    if($insert_result){
            $_SESSION['status'] = "Task Added Successfully!";
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

if(isset($_POST["updateButton"])){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];
   
    $update_query = "UPDATE `tasks` SET `title`='$title',`description`='$description',`priority`='$priority',`due_date`='$due_date' WHERE `id` = '$id'";
    $update_result = mysqli_query($con, $update_query);

    if($update_result){
            $_SESSION['status'] = "Updated Successfully!";
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

if(isset($_POST["deleteButton"])){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];
   
    $delete_query = "DELETE `tasks` WHERE `id` = '$id'";
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