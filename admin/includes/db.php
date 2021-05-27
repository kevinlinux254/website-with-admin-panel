<?php
error_reporting(0);

// connection variables
$server_name = "localhost";
$user_name = "root";
$user_pass = "123456789";
$db_name = "kapiki";

// create a connection

$connection = mysqli_connect($server_name, $user_name, $user_pass, $db_name);

// select db
$db_config = mysqli_select_db($connection, $db_name);

// check connection status

if ($db_config) {
	// echo "connection successfull";
}else {
	echo '

		<div class="container">
          <div class="text-center">
            <div class="error mx-auto" data-text="404">Database connection failed</div>
            <p class="lead text-gray-800 mb-5">Connection failure</p>
            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
            <a href="index.php">&larr; Back to Dashboard</a>
          </div>

        </div>


		 ';
}