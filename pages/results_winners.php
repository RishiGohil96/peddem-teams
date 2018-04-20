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
    <link rel="stylesheet" href="css/sweetalert.css">
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
                            <a class="waves-effect waves-dark" href="add_winners.php" aria-expanded="false"><i class="fa fa-trophy"></i><span class="hide-menu"> Add Winners</span></a>
                        </li>
                        <li>
                            <a href="#collapse_list_stats" class="collapse-toggle" data-toggle="collapse">
                                   <i class="fa fa-line-chart"></i>
                                    <span class="hide-menu"> Statistics</span>
                                </a>
                            <div id="collapse_list_stats" class="collapse">
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
                            <a href="#collapse_list_results" class="collapse-toggle" data-toggle="collapse">
                                   <i class="fa fa-bar-chart"></i>
                                    <span class="hide-menu"> Results</span>
                                </a>
                            <div id="collapse_list_results" class="collapse show">
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
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor">Results / Winners</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Winners -->
                <!-- ============================================================== -->

                <?php
                include ('config/db_config.php');
                $school[0]['category'] = "boys";
                $school[0]['age'] = "u14";

                $school[1]['category'] = "girls";
                $school[1]['age'] = "u14";

                $school[2]['category'] = "boys";
                $school[2]['age'] = "u15";

                $school[3]['category'] = "boys";
                $school[3]['age'] = "u17";

                $school[4]['category'] = "girls";
                $school[4]['age'] = "u17";

                $query = "SELECT event_list.events, p_1.s_name, p_2.s_name, p_3.s_name, position.pos_1_details, position.pos_2_details, position.pos_3_details, position.id, position.event_id
                    FROM position
                    JOIN event_list ON position.event_id = event_list.id
                    JOIN school_registered p_1 ON position.pos_1 = p_1.s_id
                    JOIN school_registered p_2 ON position.pos_2 = p_2.s_id
                    JOIN school_registered p_3 ON position.pos_3 = p_3.s_id
                    where p_1.age=?
                    and p_1.category=?
                    ORDER BY position.event_id";
                if($stmt = $conn->prepare($query))
                {
                    for($i=0; $i<5; $i++)
                    {
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body" id="<?php echo $i ?>">
                                        <h2 class='text-center text-themecolor'><?php echo $school[$i]['category']." - ".$school[$i]['age']?></h2>
                        <?php
                        $category = $school[$i]['category'];
                        $age = $school[$i]['age'];
                        $stmt->bind_param("ss", $school[$i]['age'], $school[$i]['category']);
                        if($stmt->execute())
                        {
                            $stmt->store_result();

                            if($stmt->num_rows())
                            {
                                $stmt->bind_result($event, $p1, $p2, $p3, $d1, $d2, $d3, $id, $event_id);
                                ?>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Event</th>
                                                <th>First</th>
                                                <th>Second</th>
                                                <th>Third</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while($stmt->fetch())
                                            {
                                                echo "<tr>";
                                                echo "<td rowspan=2>".$event;
                                                echo "<td>".$p1;
                                                echo "<td>".$p2;
                                                echo "<td>".$p3;
                                                echo "<td rowspan=2 class='v-center pointer edit-table' onclick=\"edit_func($id, '$category', '$age', $event_id)\"><i class='fa fa-pencil'></i>";
                                                echo "<td rowspan=2 class='v-center pointer delete-table' onclick='delete_func($id, $i)'><i class='fa fa-trash'></i>";
                                                echo "<tr>";
                                                echo "<td>".$d1;
                                                echo "<td>".$d2;
                                                echo "<td>".$d3;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <?php
                            }
                            else
                            {
                                ?>
                                <h2>No Winners Found!</h2>
                                <?php
                            }
                        }
                        else
                        {
                            echo "Something went wrong.<br>Error: ".$conn->error;
                        }
                        ?>
                                    <div class="right-text">
                                        <a href="print/print_results_winners.php?age=<?php echo $age ?>&category=<?php echo $category ?>"><i class="fa fa-file-excel-o fa-3x pointer pointer"></i></a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                }
                else
                {
                    echo "Something went wrong.<br>Error: ".$conn->error;
                }
                ?>

                <!--Winners -->
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
                © 2018 Bardez Taluka - Team Events
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
    <script src="js/jquery.redirect.js"></script>
    <!-- SweetAlert -->
    <script src="js/sweetalert.min.js"></script>

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

        function edit_func(id, category, age, event_id)
        {
            console.log(category);
            console.log(age);
            swal({
                title : "Are you sure?",
                text : "Edit the winners and details",
                type : "info",
                showCancelButton : true,
                confirmButtonText : "Yes, edit it",
                cancelButtonText : "No, cancel"
            }, function(isConfirm) {
                if(isConfirm)
                {
                    $.redirect('add_winners.php', {id : id, age: age, category: category, edit : 'winner', event_id : event_id})
                }
            });
        }

        function delete_func(id, location_id)
        {
            console.log(location_id);
            swal({
                    title: "Are you sure?",
                    text: "Delete the winners of the event",
                    showCancelButton: true,
                    cancelButtonText: 'No, cancel it!',
                    confirmButtonText: 'Yes, delete it!',
                    type: "warning"
                }, function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                                type: "POST",
                                url: "submit/delete_winners.php",
                                data: {
                                    id: id
                                }
                            })
                            .done(function(data) {
                                console.log(data);
                                data = JSON.parse(data);
                                 swal({
                                    title: data.title,
                                    text: data.message,
                                    type: data.status
                                }, function() {
                                     if(data.status == 'success')
                                         {
                                             window.location.hash = location_id;
                                             window.location.reload(true);
                                         }
                                }); // inner swal end
                            });
                    }
                }); //outer swal end
        }

    </script>
</body>

</html>
