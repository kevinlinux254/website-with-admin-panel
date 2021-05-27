<link href="css/sb-admin-2.min.css" rel="stylesheet">
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
      <div class="row">
        <div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title bg-info text-white">Connection failure</h1>
              <h2 class="card-title">Failed to connect</h2>
              <p class="card-text">Something went wrong, check your db configurations</p>
              <a href="#" class="btn btn-primary">:(</a>
            </div>
          </div>
        </div>  
      </div>

    </div>


		 ';
}