<?php
include ('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
include('db.php');
?>

<div class="container-fluid">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
	  <div class="card-header py-3">
	    <h6 class="m-0 font-weight-bold text-primary">EDIT Boats</h6>
	  </div>

	  <div class="card-body">

	  	<?php

			if (isset($_POST['edit_btn'])) {
				$id = $_POST['edit_id'];

				$qeury = "SELECT * FROM boats WHERE id='$id' ";
				$qeury_run = mysqli_query($connection, $qeury);

				// retreive data
				foreach ($qeury_run as $row) {
					?>
	<form action="updateBoats.php" method="post">
		<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
	  	<div class="form-group">
	        <label> Username </label>
	        <input type="text" name="edit_title" value="<?php echo $row['title']; ?>" class="form-control" placeholder="Enter Username" autocomplete="off">
	    </div>
	    <div class="form-group">
	        <label>Email</label>
	        <input type="email" name="edit_description" value="<?php echo $row['description']; ?>" class="form-control" placeholder="Enter Email" autocomplete="off">
	    </div>
	    <div class="form-group">
	        <label>Password</label>
	        <input type="password" name="edit_path" value="<?php echo $row['images']; ?>" class="form-control" placeholder="Enter Password" autocomplete="off">
	    </div>

	    <a href="boats.php" class="btn btn-primary">CANCEL</a>
	    <button type="submit" name="updateBoat" class="btn btn-success">UPDATE</button>
	</form>



   <?php
		}
	}

?>


	  </div>
 </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
