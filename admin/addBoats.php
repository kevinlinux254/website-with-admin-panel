<?php
include 'security.php';
include 'db.php';

// add feautured boats
// ===================

// $uploaddir = "../images/";
// $uploadfile = $uploaddir . basename($_FILES["rental_images"]["name"]);

if (isset($_POST['add_boat'])) {
    $id = $_POST['id'];
    $boat_title = $_POST['title'];
    $boat_description = $_POST['description'];
    $image_path = $_POST['image_path'];

    $query_boat = "INSERT INTO boats (`title`, `description`, `images`) 
                      VALUES ('$boat_title', '$boat_description', '$image_path')";
    $query_run_boat = mysqli_query($connection, $query_boat);

    if ($query_run_rentals) {
        $_SESSION['success'] = "Boat added";
        header("Location: boats.php");
    }else {
        $_SESSION['status'] = "An error occurred";
        header("Location: boats.php");
    }
}
?>