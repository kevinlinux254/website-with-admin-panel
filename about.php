<?php
include ('includes/security.php');
include('includes/header.php'); 
// include('includes/navbar.php'); 
include('includes/db.php');
?>





<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">

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


    <?php
      $query = "SELECT * FROM about";
      $query_run = mysqli_query($connection, $query);
      ?>
    <div class="container">
      <div class="row">
        <?php
          if (mysqli_num_rows($query_run) > 0) {
            while($row = mysqli_fetch_assoc($query_run)) {
            ?>

          <div class="col-lg-12">
            

            <h1 class="text-primary text-center text-uppercase"><?php echo $row['title']; ?></h1>
            <h2 class="h4 text-capitalize text-info"><?php echo $row['subtitle']; ?></h2>      
            <p class="h5"><?php echo $row['description']; ?></p>
          </div>
         

       <?php
              }
          }else {
            echo "No record found";
          }
          ?>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>