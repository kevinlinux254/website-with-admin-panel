<?php
include 'security.php';
include 'db.php';

// update homepage
// ===============
if (isset($_POST['updateBoat'])) {
    $id = $_POST['edit_id'];
    $edit_title = $_POST['edit_title'];
    $edit_description = $_POST['edit_description'];
    $edit_path = $_POST['edit_path'];

    $update_boat = "UPDATE boats SET title='$edit_title', description='$edit_description', images='$edit_path' 
                    WHERE id='$id' ";
    $query_run_boat = mysqli_query($connection, $update_boat);

    if ($query_run_boat) {
        $_SESSION['success'] = "Edit successfull";
        header("Location: boats.php");
    }else {
        $_SESSION['status'] = "Edit error";
        header("Location: boats.php");
    }
}
?>