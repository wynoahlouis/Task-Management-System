<?php
session_start();    
include("config.php");


if(isset($_POST["submitButton"])){

    $id = $_POST['id'];
    $studentId = $_POST['studentId'];
    $fname = $_POST['fname'];
    $mname = isset($_POST['mname']) ? $_POST['mname'] : '' ;
    $lname = $_POST['lname'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];

    $submit_query = "INSERT INTO `student_information`(`studentId`, `fname`, `mname`, `lname`, `birthday`, `address`) VALUES ('$studentId','$fname','$mname','$lname','$birthday','$address')";
    $submit_result = mysqli_query($con, $submit_query);

    if($submit_result){
            $_SESSION['status'] = "Submitted Successfully!";
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
    $studentId = $_POST['studentId'];
    $fname = $_POST['fname'];
    $mname = isset($_POST['mname']) ? $_POST['mname'] : '' ;
    $lname = $_POST['lname'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];

    $update_query = "UPDATE `student_information` SET `studentId`='$studentId',`fname`='$fname',`mname`='$mname',`lname`='$lname',`birthday`='$birthday',`address`='$address' WHERE `id` = '$id'";
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

?>