<?php
include 'security.php';
include 'db.php';

// login a user-admin
// ==================

if (isset($_POST['login_btn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $admin_login = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $admin_login);
    $usertypes = mysqli_fetch_array($query_run);

    if ($usertypes['usertype'] == "admin") {
        $_SESSION['username'] = $email_login;
        header("Location: index.php");
    }elseif ($usertypes['usertype'] == "user") {
        $_SESSION['username'] = $email_login;
        header("Location: ../index.php");
    }else {
        $_SESSION['status'] = "Incorrect credantials";
        header("Location: login.php");
    }

    // check status
    // if (mysqli_fetch_array($query_run)) {
    //     $_SESSION['username'] = $email_login;
    //     header("Location: index.php");
    // }else {
    //     $_SESSION['status'] = "Incorrect credantials";
    //     header("Location: login.php");
    // }
}






?>