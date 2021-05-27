<?php
include 'security.php';
include 'db.php';

// update / edit admin details
// ===========================

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $edit_username = $_POST['edit_username'];
    $edit_email = $_POST['edit_email'];
    $edit_password = $_POST['edit_password'];
    $update_user_type = $_POST['update_user_type'];

    // $query = "SELECT * FROM register WHERE id='$id' ";
    $update = "UPDATE register SET username='$edit_username', email='$edit_email', password='$edit_password',       
               usertype='$update_user_type' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $update);

    

    if($query_run) {
        $_SESSION['success'] = "Edit success";
        $_SESSION['status_code'] = "success";
        header("Location: register.php");
    }else {
        $_SESSION['status'] = "Edit error";
        $_SESSION['status_code'] = "status";
        header("Location: register.php");
    }
}
?>