<?php
include 'security.php';
include 'db.php';

// delete homepage record
// ======================
if (isset($_POST['delete_boat'])) {
    $id = $_POST['delete_id'];

    $delete_boat = "DELETE FROM boats WHERE id='$id' ";
    $query_run_delete_boats = mysqli_query($connection, $delete_boat);

    if ($query_run_delete_boats) {
        $_SESSION['success'] = "Delete successfull";
        header("Location: boats.php");
    }else {
        $_SESSION['status'] = "Delete error";
        header("Location: boats.php");
    }
}
?>