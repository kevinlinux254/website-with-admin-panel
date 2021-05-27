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
	    <h6 class="m-0 font-weight-bold text-primary">EDIT About Us</h6>
	  </div>

	  <div class="card-body">

	  	<?php

			if (isset($_POST['edit_btn'])) {
				$id = $_POST['edit_id'];

				$qeury = "SELECT * FROM about WHERE id='$id' ";
				$qeury_run = mysqli_query($connection, $qeury);

				// retreive data
				foreach ($qeury_run as $row) {
					?>
	<form action="updateAboutus.php" method="post">
		<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
	  	<div class="form-group">
	        <label> Title </label>
	        <input type="text" name="edit_title" value="<?php echo $row['title']; ?>" class="form-control" placeholder="Edit title" autocomplete="off">
	    </div>
	    <div class="form-group">
	        <label>Sub Title</label>
	        <input type="text" name="edit_subtitle" value="<?php echo $row['subtitle']; ?>" class="form-control" placeholder="Edit subtitle" autocomplete="off">
	    </div>
	    <div class="form-group">
	        <label>Description</label>
	        <textarea type="text" name="edit_description" value="<?php echo $row['description']; ?>" 
	        class="form-control"  autocomplete="off" rows="5" cols="55"><?php echo $row['description']; ?></textarea>
	    </div>

	    <a href="about.php" class="btn btn-primary">CANCEL</a>
	    <button type="submit" name="edit_btn" class="btn btn-success">UPDATE</button>
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