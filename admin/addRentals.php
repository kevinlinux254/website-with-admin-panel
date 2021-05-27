<?php
include 'security.php';
include 'db.php';

// add rentals
// ===========

$uploaddir = "../images/";
$uploadfile = $uploaddir . basename($_FILES["rental_images"]["name"]);

if (isset($_POST['add_rentals'])) {
    $id = $_POST['id'];
    $rentals_title = $_POST['title'];
    $rentals_description = $_POST['description'];
    $images = $_FILES["rental_images"]["name"];

    $query_rentals = "INSERT INTO rentals (`title`, `description`, `images`) 
                      VALUES ('$rentals_title', '$rentals_description', '$images')";
    $query_run_rentals = mysqli_query($connection, $query_rentals);

    if ($query_run_rentals) {
        move_uploaded_file($_FILES["rental_images"]["tmp_name"], $uploadfile);
        $_SESSION['success'] = "Rentals added successfully";
        header("Location: rentals.php");
    }else {
        $_SESSION['status'] = "An error occurred";
        header("Location: rentals.php");
    }
}
?>