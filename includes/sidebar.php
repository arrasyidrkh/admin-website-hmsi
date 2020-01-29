<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else{

?>

<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top Begin -->
    <div class="navbar-header"><!-- navbar-header Begin -->

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle Begin -->

            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button><!-- navbar-toggle Finish -->

        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>

    </div><!-- navbar-header Finish -->

    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav Begin -->

        <li class="dropdown"><!-- dropdown Begin -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle Begin -->

                <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>

            </a><!-- dropdown-toggle Finish -->

            <ul class="dropdown-menu"><!-- dropdown-menu Begin -->
                <li><!-- li Begin -->
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>"><!-- a href Begin -->

                        <i class="fa fa-fw fa-user"></i> Profile

                    </a><!-- a href Finish -->
                </li><!-- li Finish -->

                <li><!-- li Begin -->
                    <a href="index.php?view_hmsi"><!-- a href Begin -->

                        <i class="fa fa-fw fa-users"></i> BPH HMSI

                    </a><!-- a href Finish -->
                </li><!-- li Finish -->

                <li><!-- li Begin -->
                    <a href="index.php?view_customers"><!-- a href Begin -->

                        <i class="fa fa-fw fa-user-secret"></i> About Web

                    </a><!-- a href Finish -->
                </li><!-- li Finish -->

                <li class="divider"></li>

                <li><!-- li Begin -->
                    <a href="logout.php"><!-- a href Begin -->

                        <i class="fa fa-fw fa-power-off"></i> Log Out

                    </a><!-- a href Finish -->
                </li><!-- li Finish -->

            </ul><!-- dropdown-menu Finish -->

        </li><!-- dropdown Finish -->

    </ul><!-- nav navbar-right top-nav Finish -->

    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Begin -->
            <li><!-- li Begin -->
                <a href="index.php?dashboard"><!-- a href Begin -->

                    <i class="fa fa-fw fa-dashboard"></i> Dashboard

                </a><!-- a href Finish -->
            </li><!-- li Finish -->

            <li><!-- li Begin -->
              <a href="#" data-toggle="collapse" data-target="#absensi"><!-- a href Begin -->

                  <i class="fa fa-fw fa-book"></i> Absensi
                  <i class="fa fa-fw fa-caret-down"></i>

              </a><!-- a href Finish -->

              <ul id="absensi" class="collapse"><!-- collapse Begin -->
                  <li><!-- li Begin -->
                      <a href="index.php?insert_absen"> Tambah Manual Absen </a>
                  </li><!-- li Finish -->
                  <li><!-- li Begin -->
                      <a href="index.php?view_absen"> List Absensi </a>
                  </li><!-- li Finish -->
              </ul>  <!-- collapse Finish -->

            </li><!-- li Finish -->

            <li><!-- li Begin -->
                <a href="#" data-toggle="collapse" data-target="#code"><!-- a href Begin -->
                    <i class="fa fa-fw fa-qrcode "></i> Event Code
                    <i class="fa fa-fw fa-caret-down"></i>
                </a><!-- a href Finish -->

                <ul id="code" class="collapse"><!-- collapse Begin -->
                    <li><!-- li Begin -->
                        <a href="index.php?insert_event"> Tambah Event Code </a>
                    </li><!-- li Finish -->
                    <li><!-- li Begin -->
                        <a href="index.php?view_event"> List Event Code </a>
                    </li><!-- li Finish -->
                </ul>  <!-- collapse Finish -->
            </li><!-- li Finish -->

            <li><!-- li Begin -->
                <a href="logout.php"><!-- a href Begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href Finish -->
            </li><!-- li Finish -->

        </ul><!-- nav navbar-nav side-nav Finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse Finish -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Finish -->

<?php } ?>
