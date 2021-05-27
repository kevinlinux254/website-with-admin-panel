<?php
include 'security.php';
include 'db.php';



// edit rentals
// ============
if (isset($_POST['edit_rentals_btn'])) {
    $id = $_POST['edit_id'];
    $edit_rentals_title = $_POST['edit_title'];
    $edit_rentals_description = $_POST['edit_description'];

    $query_edit_rentals = "UPDATE rentals SET title='$edit_rentals_title', description='$edit_rentals_description' ";
    $qeury_run_rentals = mysqli_query($connection, $query_edit_rentals);

    if ($query_run_rentals) {
        $_SESSION['success'] = "Edit successfull";
        header("Location: rentals.php");
    }else {
        $_SESSION['status'] = "Edit error";
        header("Location: rentals.php");
    }

}
?>