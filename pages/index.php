<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="../../../images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../../../images/favicon/favicon-16x16.png" sizes="16x16" />

    <title>Cravings | Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure">Cravings - Admin Dashboard</div>
            <p class="loader__label"></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <img src="../../../images/logo.png" alt="homepage" class="dark-logo" width="90" />
                        </b>
                        <!--End Logo icon -->
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="#"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li>
                            <a href="#collapse_list" class="collapse-toggle" data-toggle="collapse">
                                   <i class="mdi mdi-file-document"></i>
                                    <span class="hide-menu"> Orders </span>
                                </a>
                            <div id="collapse_list" class="collapse">
                                <ul class="list-group">
                                    <li>
                                        <a class="waves-effect waves-dark" href="orders_pending.php" aria-expanded="false">
                                            <i class="fa fa-exclamation"></i>
                                            <span class="hide-menu"> Pending Orders</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="orders_confirmed.php" aria-expanded="true">
                                            <i class="fa fa-check"></i>
                                            <span class="hide-menu"> Confirmed Orders</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="orders_cancelled.php" aria-expanded="true">
                                            <i class="fa fa-times"></i>
                                            <span class="hide-menu"> Cancelled Orders</span>
                                            </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#collapse_list_cakes" class="collapse-toggle" data-toggle="collapse">
                                   <i class="mdi mdi-cake"></i>
                                    <span class="hide-menu"> Cakes </span>
                                </a>
                            <div id="collapse_list_cakes" class="collapse">
                                <ul class="list-group">
                                    <li>
                                        <a class="waves-effect waves-dark" href="cakes_add.php" aria-expanded="false">
                                            <i class="fa fa-plus"></i>
                                            <span class="hide-menu"> Add Cake</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="cakes_update.php" aria-expanded="true">
                                            <i class="fa fa-check"></i>
                                            <span class="hide-menu"> Update Cake</span>
                                            </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#collapse_list_customers" class="collapse-toggle" data-toggle="collapse">
                                   <i class="fa fa-address-book-o"></i>
                                    <span class="hide-menu"> Customers </span>
                                </a>
                            <div id="collapse_list_customers" class="collapse">
                                <ul class="list-group">
                                    <li>
                                        <a class="waves-effect waves-dark" href="customers_add.php" aria-expanded="false">
                                            <i class="fa fa-user-plus"></i>
                                            <span class="hide-menu"> Add Customers</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="customers_view.php" aria-expanded="true">
                                            <i class="fa fa-users"></i>
                                            <span class="hide-menu"> View Customers</span>
                                            </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="stats.php" aria-expanded="true">
                                    <i class="fa fa-line-chart"></i>
                                    <span class="hide-menu"> Stats</span>
                                </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="#" aria-expanded="true" onclick=logout()>
                                    <i class="fa fa-sign-out"></i>
                                    <span class="hide-menu"> Log Out</span>
                                </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Home</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Pending Orders -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                    $query = "SELECT count('order_status') as count from cravings_test_orders_details where order_status='placed' ";

                                    if($result = $conn->query($query))
                                    {
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo "<a href='orders_pending.php'><h2>".$row['count']." pending orders!</a></h2>";
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Pending Orders -->
                <!-- ============================================================== -->

                <!-- Upcoming Birthdays -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body upcoming_birthdays">
                                <h3 class="text-themecolor">Upcoming Birthdays</h3>
                                <?php
                                    $today = date('2000-m-d');
                                    $next_week = date('2000-m-d', strtotime('+1 week'));
                                    $query = "SELECT * FROM `cravings_test_customers` WHERE birthday BETWEEN '$today' AND '$next_week'  ORDER BY birthday";
                                    if($result = $conn->query($query))
                                    {
                                        if(mysqli_num_rows($result) == 0)
                                        {
                                            ?>
                                    <h4>No Birthdays this week!</h4>
                                    <?php
                                        }
                                        else
                                        {
                                            ?>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>e-mail</th>
                                                        <th>Birthday</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $birthday = explode('-',$row['birthday']);
                                                $birthday = $birthday[2].'/'.$birthday[1];
                                                echo "<tr>";
                                                echo "<td>".$row['name']."</td>";
                                                echo "<td>".$row['phone']."</td>";
                                                echo "<td>".$row['email']."</td>";
                                                echo "<td>".$birthday."</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php
                                        }

                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Upcoming Birthdays -->
                <!-- ============================================================== -->


                <!-- Orders Summary -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-themecolor">Orders Summary</h3>
                                <?php

                                    $query = "SELECT
                                                SUM(IF(order_status = 'placed', 1,0)) AS `pending_orders`,
                                                SUM(IF(order_status = 'confirmed', 1,0)) AS `confirmed_orders`,
                                                SUM(IF(order_status = 'cancelled', 1,0)) AS `cancelled_orders`,
                                                COUNT(order_status) AS `total`
                                                FROM cravings_test_orders_details";
                                    if($result = $conn->query($query))
                                    {

                                            ?>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Pending Orders</th>
                                                    <th>Confirmed Orders</th>
                                                    <th>Cancelled Orders</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo "<tr>";
                                                echo "<td>".$row['pending_orders']."</td>";
                                                echo "<td>".$row['confirmed_orders']."</td>";
                                                echo "<td>".$row['cancelled_orders']."</td>";
                                                echo "<td>".$row['total']."</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php


                                    }
                                    else echo $conn->error;
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Orders Summary -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Cravings - Admin Dashboard
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- Redirect JS -->
    <script src="../../../js/jquery.redirect.js"></script>

    <script type="text/javascript">
        function logout() {
            $.ajax({
                    method: "POST",
                    url: "login/logout.php"
                })
                .done(function() {
                    console.log('logged out');
                    window.location = 'login/';
                });
        }

    </script>
</body>

</html>
