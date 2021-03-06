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
    <script src="js/angular.min.js"></script>
    <title>Registered Schools</title>
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
    <div id="main-wrapper" ng-app="sortApp" ng-controller="mainController">
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
                            <div id="collapse_list" class="collapse show">
                                <ul class="list-group">
                                    <li>
                                        <a class="waves-effect waves-dark" href="add_school.php" aria-expanded="false">
                                            <i class="fa fa-plus-square"></i>
                                            <span class="hide-menu">Add School</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="collapse-toggle has-arrow" href="#school_registered_category" data-toggle="collapse">
                                            <i class="fa fa-eye"></i>
                                            <span class="hide-menu">View Registered</span>
                                        </a>
                                        <div id="school_registered_category" class="collapse show">
                                            <ul class="list-group">
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = ''; age_filter = '' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">All</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = 'boys'; age_filter = '' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Boys</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = 'girls'; age_filter = '' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Girls</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = ''; age_filter = 'u14' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Under 14</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = ''; age_filter = 'u15' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Under 15</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = ''; age_filter = 'u17' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Under 17</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = 'boys'; age_filter = 'u14' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Boys - Under 14</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = 'girls'; age_filter = 'u14' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Girls - Under 14</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = 'boys'; age_filter = 'u17' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Boys - Under 17</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" ng-click="category_filter = 'girls'; age_filter = 'u17' " aria-expanded="false">
                                                        <i class="fa fa-chevron-right"></i>
                                                        <span class="hide-menu">Girls - Under 17</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
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
                        <h3 class="text-themecolor">School Register / Registered Schools</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Registered Schools -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>School</th>
                                                <th>Category</th>
                                                <th>Age</th>
                                                <th>Participants</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="school in schools | filter : {'category' : category_filter, 'age' : age_filter} as filtered" >
                                                <td class="waves-effect waves-dark" style="width:100%" ng-click="school_details(school.s_id, school.school, school.category, school.age)" class="pointer">{{ school.school }}</td>
                                                <td>{{ school.category }}</td>
                                                <td>{{ school.age }}</td>
                                                <td>{{ school.participants }}</td>
                                                <td class="center-text edit-table"><a ng-click=edit_func(school.s_id)><i class="fa fa-pencil pointer"></i></a></td>
                                                <td class="center-text delete-table"><a ng-click=delete_func(school.s_id)><i class="fa fa-trash pointer"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h2 class="text-themecolor">Total Schools: {{filtered.length}}</h2>
                                <h2 class="text-themecolor">Total Participants: {{ totalParticipants(filtered) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Registered Schools  -->
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
    <script src="js/jquery.redirect.js"></script>
    <!-- Sweet Alert -->
    <script src="js/sweetalert.min.js"></script>

    <script type="text/javascript">
        // ---------------- logout function --------------//
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
        // -------------- logout function end ------------//

        // ---------------- edit function --------------//

        function edit_func(s_id) {
            console.log("here");
        }

        // -------------- edit function end ------------//
    </script>

    <script>
        var app = angular.module('sortApp', []);
        app.controller('mainController', function($scope, $http) {
            $http.get('json/view_registered_school_json.php')
                .then(function(res) {
                    $scope.schools = res.data;
                    $scope.category_filter = '';
                    $scope.age_filter = '';
                }); //get end
            $scope.edit_func = function(s_id) {
                $.redirect("add_school_events.php", {
                    s_id: s_id,
                    edit: 1
                });
            };

            $scope.delete_func = function(s_id) {
                console.log(s_id);
                swal({
                    title: "Are you sure?",
                    text: "Delete the school and all its participanting events!",
                    showCancelButton: true,
                    cancelButtonText: 'No, cancel it!',
                    confirmButtonText: 'Yes, I am sure!',
                    type: "warning"
                }, function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                                type: "POST",
                                url: "submit/delete_school.php",
                                data: {
                                    s_id: s_id
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
                                             location.reload();
                                         }
                                }); // inner swal end
                            });
                    }
                }); //outer swal end
            }; // delete_func() end

            $scope.school_details = function(s_id, school, category, age) {
                console.log(s_id);
                console.log(school);
                $.redirect("view_school_events.php", {
                    s_id: s_id,
                    school : school,
                    category : category,
                    age : age
                });
            };

            $scope.totalParticipants = function() {
                var total = 0;
                for(var i = 0; i < $scope.filtered.length; i++)
                {
                    total += parseInt($scope.filtered[i].participants);
                }
                return total;
            };
        }); // controller end
    </script>
</body>

</html>
