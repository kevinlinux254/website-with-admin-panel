<?php
include 'security.php';
include 'db.php';

// update homepage
// ===============
if (isset($_POST['edit_btn_home'])) {
    $id = $_POST['edit_id'];
    $edit_title = $_POST['edit_title'];
    $edit_description = $_POST['edit_description'];
    $edit_more_description = $_POST['edit_more_description'];

    $update_home = "UPDATE latest SET title='$edit_title', description='$edit_description', more_description=' 
                    $edit_more_description' WHERE id='$id' ";
    $query_run_home = mysqli_query($connection, $update_home);

    if ($query_run_home) {
        $_SESSION['success'] = "Edit successfull";
        header("Location: home.php");
    }else {
        $_SESSION['status'] = "Edit error";
        header("Location: home.php");
    }
}
?>