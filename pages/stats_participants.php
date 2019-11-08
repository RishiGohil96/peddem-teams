<?php
include('login/verify_login.php');
?>

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

    <title>Home</title>
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
            <div class="loader__figure">Bardez Taluka - Team Events</div>
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
                            <img src="../assets/images/logo-1.png" alt="homepage" class="dark-logo" height="50" />
                            &nbsp; Bardez Taluka - Team Events
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
                            <a href="#collapse_list" class="collapse-toggle has-arrow" data-toggle="collapse">
                                   <i class="fa fa-address-book-o"></i>
                                    <span class="hide-menu">School Register</span>
                                </a>
                            <div id="collapse_list" class="collapse">
                                <ul class="list-group">
                                    <li>
                                        <a class="waves-effect waves-dark" href="add_school.php" aria-expanded="false">
                                            <i class="fa fa-plus-square"></i>
                                            <span class="hide-menu">Add School</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="view_registered_school.php" aria-expanded="true">
                                            <i class="fa fa-eye"></i>
                                            <span class="hide-menu">View Registered</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="add_school_participated.php" aria-expanded="false">
                                            <i class="fa fa-check-circle"></i>
                                            <span class="hide-menu">School Participated</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="event_list.php" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu"> Events List</span></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="add_winners.php" aria-expanded="false"><i class="fa fa-trophy"></i><span class="hide-menu"> Add Winners</span></a>
                        </li>
                        <li>
                            <a href="#collapse_list_stats" class="collapse-toggle has-arrow" data-toggle="collapse">
                                   <i class="fa fa-line-chart"></i>
                                    <span class="hide-menu"> Statistics</span>
                                </a>
                            <div id="collapse_list_stats" class="collapse show">
                                <ul class="list-group">
                                    <li>
                                        <a class="waves-effect waves-dark" href="stats_schools.php" aria-expanded="false">
                                            <i class="fa fa-university"></i>
                                            <span class="hide-menu"> Schools</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="stats_participants.php" aria-expanded="true">
                                            <i class="fa fa-users"></i>
                                            <span class="hide-menu"> Participants</span>
                                            </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#collapse_list_results" class="collapse-toggle has-arrow" data-toggle="collapse">
                                   <i class="fa fa-bar-chart"></i>
                                    <span class="hide-menu"> Results</span>
                                </a>
                            <div id="collapse_list_results" class="collapse">
                                <ul class="list-group">
                                    <li>
                                        <a class="waves-effect waves-dark" href="results_winners.php" aria-expanded="false">
                                            <i class="fa fa-trophy"></i>
                                            <span class="hide-menu"> Winners</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="results_outstanding.php" aria-expanded="true">
                                            <i class="fa fa-users"></i>
                                            <span class="hide-menu"> Outstanding Persons</span>
                                            </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="delete_records.php" aria-expanded="true">
                                <i class="fa fa-trash-o"></i>
                                <span class="hide-menu"> Delete Records</span>
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
                    <div class="col-md-12 col-lg-12 align-self-center">
                        <h3 class="text-themecolor">Statistics / Participants</h3>
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
                                include('config/db_config.php');
                                $query = "SELECT category, age, sum(participants) as participants from school_registered GROUP BY category, age";
                                if($result = $conn->query($query))
                                {
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-stripped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Age</th>
                                                    <th>Category</th>
                                                    <th>Participants</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $total = 0;
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$row['age']."</td>";
                                                    echo "<td>".$row['category']."</td>";
                                                    echo "<td>".$row['participants']."</td>";
                                                    echo "</tr>";
                                                    $total += $row['participants'];
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td><b><?php echo $total ?></b></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
                                }
                                ?>
                                <div class="right-text">
                                    <a href="print/print_stats_participants.php"><i class="fa fa-file-excel-o fa-3x pointer"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End paticipants list -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body center-text">
                                <h2><a href="print/print_event_summary.php">Event Wise Participants List <i class="fa fa-file-excel-o"></i></a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body center-text">
                                <h2><a href="print/print_final_statistical_details.php">Final Statistical Details <i class="fa fa-file-excel-o"></i></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
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
                © 2018 Bardez Taluka - Team Events by <a href="https://www.facebook.com/rocking.rishi96">Rishi Gohil</a>
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
