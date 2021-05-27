<?php
include 'security.php';
include 'db.php';



// delete a record // admin record
// ================================

if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $delete = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $delete);

    if ($query_run) {
        $_SESSION['success'] = "Delete successfull";
        header("Location: register.php");
    }else {
        $_SESSION['status'] = "Delete error";
        header("Location: register.php");
    }
}

?>