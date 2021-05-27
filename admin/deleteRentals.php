<?php
include 'security.php';
include 'db.php';

// delete rentals record
// ======================
if (isset($_POST['delete_rentals_btn'])) {
    $id = $_POST['delete_id'];

    $delete_rentals = "DELETE FROM rentals WHERE id='$id' ";
    $query_run_delete_rentals = mysqli_query($connection, $delete_rentals);

    if ($query_run_delete_rentals) {
        $_SESSION['success'] = "Delete successfull";
        header("Location: rentals.php");
    }else {
        $_SESSION['status'] = "Delete error";
        header("Location: rentals.php");
    }
}
?>