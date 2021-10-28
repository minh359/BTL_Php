<!DOCTYPE html>
<html lang="en">

<?php require_once "./mvc/views/Admin_pages/partials/head.php" ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
    require_once "./mvc/views/Admin_pages/partials/_navbar.php";
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php
      require_once "./mvc/views/Admin_pages/partials/_sidebar.php";
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Main Content render-->
          <!-- Quick Action Toolbar Starts-->
          <?php
          require_once "./mvc/views/Admin_pages/partials/_quickbar.php";
          ?>
          <!-- Quick Action Toolbar Ends-->
          <?php
          require_once "./mvc/views/Admin_pages/" . $data["page"] . ".php";
          ?>
        </div>

        <!-- End Main Content-->
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        require_once "./mvc/views/Admin_pages/partials/_footer.php";
        ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

</body>

</html>