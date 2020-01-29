<?php

    session_start();
    include("includes/db.php");

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else{

      $admin_session = $_SESSION['admin_email'];

      $get_admin = "SELECT * FROM admins WHERE admin_email='$admin_session'";
      $run_admin = mysqli_query($con,$get_admin);
      $row_admin = mysqli_fetch_array($run_admin);

      $admin_id = $row_admin['admin_id'];
      $admin_name = $row_admin['admin_name'];
      $admin_email = $row_admin['admin_email'];
      $admin_image = $row_admin['admin_image'];
      $admin_country = $row_admin['admin_country'];
      $admin_about = $row_admin['admin_about'];
      $admin_contact = $row_admin['admin_contact'];
      $admin_job = $row_admin['admin_job'];
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMEZING | Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- wrapper Begin -->

        <?php include("includes/sidebar.php") ?>

        <div id="page-wrapper"><!-- page-wrapper Begin -->
            <div class="container-fluid"><!-- container-fluid Begin -->

              <?php

                  if(isset($_GET['dashboard'])){

                      include("dashboard.php");

                  }  if(isset($_GET['insert_event'])){

                          include("insert_event.php");

                  }   if(isset($_GET['view_hmsi'])){

                          include("view_hmsi.php");

                  }   if(isset($_GET['view_event'])){

                          include("view_event.php");

                  }   if(isset($_GET['user_profile'])){

                          include("user_profile.php");

                  }   if(isset($_GET['view_absen'])){

                          include("view_absen.php");

                  }   if(isset($_GET['insert_absen'])){

                          include("insert_absen.php");

                  }

              ?>

            </div><!-- container-fluid Finish -->
        </div><!-- page-wrapper Finish -->
    </div><!-- wrapper Finish -->

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>

<?php } ?>
