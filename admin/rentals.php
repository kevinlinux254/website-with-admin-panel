<?php
include ('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
include('db.php');
?>

<!-- 
featured rentals
=================
 -->


	<div class="modal fade" id="featuredrentals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Featured Rentals</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="addRentals.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter title" autocomplete="off" required="">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea type="text" name="description" class="form-control" placeholder="Enter description" autocomplete="off" rows="5" cols="55" required=""></textarea>
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="rental_images" id="rental_images" required="">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="add_rentals" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Featured Rentals 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#featuredrentals">
              ADD 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <?php
    if (isset($_SESSION['success']) && $_SESSION['success'] !='') {
      echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
      unset($_SESSION['success']);
    }
    if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
      echo '<h2 class="bg-danger text-white"> '.$_SESSION['status']. '</h2>';
      unset($_SESSION['status']);
    }
    ?>

    <div class="table-responsive">
      <?php
      $query = "SELECT * FROM rentals";
      $query_run = mysqli_query($connection, $query);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Images</th>
            <th>Date</th>
            <th>EDIT</th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (mysqli_num_rows($query_run) > 0) {
            while($row = mysqli_fetch_assoc($query_run)) {
            ?>
            
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['images'] ;?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
              <form action="editRentals.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_rentals_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="deleteRentals.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_rentals_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
              <?php
              }
          }else {
            echo "No record found";
          }
          ?>
                
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>