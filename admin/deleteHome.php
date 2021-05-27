<?php
include 'security.php';
include 'db.php';

// delete homepage record
// ======================
if (isset($_POST['delete_home_btn'])) {
    $id = $_POST['delete_id'];

    $delete_home = "DELETE FROM latest WHERE id='$id' ";
    $query_run_delete_home = mysqli_query($connection, $delete_home);

    if ($query_run_delete_home) {
        $_SESSION['success'] = "Delete successfull";
        header("Location: home.php");
    }else {
        $_SESSION['status'] = "Delete error";
        header("Location: home.php");
    }
}
?>