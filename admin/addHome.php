<?php
include 'security.php';
include 'db.php';


// add content to latest blogs
// ===========================

if (isset($_POST['add_latest'])) {
    $latest_title = $_POST['title'];
    $describe = $_POST['describe'];
    $more_description = $_POST['more_description'];

    $query_latest = "INSERT INTO latest (title, description, more_description) 
                     VALUES ('$latest_title', '$describe', '$more_description')";
    $query_run_latest = mysqli_query($connection, $query_latest);

    if ($query_run_latest) {
        $_SESSION['success'] = "Information added successfully";
        $_SESSION['status_code'] = "success";
        header("Location: home.php");
    }else {
        $_SESSION['status'] = "An error occurred";
        $_SESSION['status_code'] = "status";
        header("Location: home.php");
    }
}
?>