<?php 
include 'includes/security.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/db.php';
?>

    


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
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
          $id = (int)$_GET["id"];
          $query = "SELECT * FROM latest";
          $query_run = mysqli_query($connection, $query);
        ?>
        <!-- Three columns of text below the carousel -->
        <h1>Feautured Tours</h1>
        <div class="row">
          <?php
          if (mysqli_num_rows($query_run) > 0) {
            $data = array();
            while($row = mysqli_fetch_assoc($query_run)) {
            $data[] = $row;
            ?>
          <div class="col-md-3 text-center">
            <img src="<?php echo $row['images'] ;?>" alt="Generic placeholder image" width="250" height="150">
            <h5><?php echo $row['title']; ?></h5>
            <p><?php echo $row['description']; ?></p>
            <p><a class="btn btn-secondary" href="" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          

          <?php
              }
          }else {
            echo "No record found";
          }
          ?>
        </div><!-- /.row -->


        
      </div><!-- /.container -->
    </main>

    <main>
      
      <div class="container marketing">
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
          $id = (int)$_GET["id"];
          $query = "SELECT * FROM rentals";
          $query_run = mysqli_query($connection, $query);
        ?>
        <!-- Three columns of text below the carousel -->
        <h1>Feautured Rentals / Hotels</h1>
        <div class="row">
          <?php
          if (mysqli_num_rows($query_run) > 0) {
            $data = array();
            while($row = mysqli_fetch_assoc($query_run)) {
            $data[] = $row;
            ?>
          <div class="col-md-3 text-center">
            <img src="<?php echo $row['images'] ;?>" alt="Generic placeholder image" width="250" height="150">
            <h5><?php echo $row['title']; ?></h5>
            <p><?php echo $row['description']; ?></p>
            <p><a class="btn btn-secondary" href="" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          

          <?php
              }
          }else {
            echo "No record found";
          }
          ?>
        </div><!-- /.row -->


        
      </div><!-- /.container -->
    </main>

    <!-- 
    featured boats
    ==============
     -->

     <main>
      
      <div class="container marketing">
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
          $id = (int)$_GET["id"];
          $query = "SELECT * FROM boats";
          $query_run = mysqli_query($connection, $query);
        ?>
        <!-- Three columns of text below the carousel -->
        <h1>Feautured Boats</h1>
        <div class="row">
          <?php
          if (mysqli_num_rows($query_run) > 0) {
            $data = array();
            while($row = mysqli_fetch_assoc($query_run)) {
            $data[] = $row;
            ?>
          <div class="col-md-3 text-center">
            <img src="<?php echo $row['images'] ;?>" alt="Generic placeholder image" width="250" height="150">
            <h5><?php echo $row['title']; ?></h5>
            <p><?php echo $row['description']; ?></p>
            <p><a class="btn btn-secondary" href="" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          

          <?php
              }
          }else {
            echo "No record found";
          }
          ?>
        </div><!-- /.row -->


        
      </div><!-- /.container -->
    </main>











    <?php include 'includes/scripts.php'; ?>
    

    
  

<!-- <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg> -->

</body>

</html>