<?php
include 'security.php';
include 'db.php';

// update / edit about us
//======================== 
if (isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];
    $edit_title = $_POST['edit_title'];
    $edit_subtitle = $_POST['edit_subtitle'];
    $edit_description = $_POST['edit_description'];

    $update_about = "UPDATE about SET title='$edit_title', subtitle='$edit_subtitle', description='$edit_description'
                     WHERE id='$id' ";
    $query_run = mysqli_query($connection, $update_about);

    if ($query_run) {
        $_SESSION['success'] = "Update successfull";
        header("Location: about.php");
    }else {
        $_SESSION['status'] = "Update error";
        header("Location: about.php");
    }
}
?>