<?php
include 'security.php';
include 'db.php';

// add content to about us page
// ============================

if (isset($_POST['add_about'])) {
    $title = $_POST['title'];
    $sub_title = $_POST['subtitle'];
    $description = $_POST['description'];

    $query_about = "INSERT INTO about (title, subtitle, description) VALUES ('$title', '$subtitle', '$description')";
    $query_about_us = mysqli_query($connection, $query_about);

    if ($query_about_us) {
        $_SESSION['success'] = "About us added successfully";
        $_SESSION['status_code'] = "success";
        header('Location: about.php');
    }else {
        $_SESSION['status'] = "Failed to add about us";
        $_SESSION['status_code'] = "status";
        header("Location: about.php");
    }
}
?>