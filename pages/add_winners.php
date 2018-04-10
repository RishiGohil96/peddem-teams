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
    <script src="js/angular.min.js"></script>
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
    <div id="main-wrapper" ng-app="winnerApp" ng-controller="mainController">
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
                            <a href="#collapse_list_winners" class="collapse-toggle" data-toggle="collapse">
                                   <i class="fa fa-trophy"></i>
                                    <span class="hide-menu"> Add Winners</span>
                                </a>
                            <div id="collapse_list_winners" class="collapse show">
                                <ul class="list-group">
                                    <li>
                                        <a class="waves-effect waves-dark" aria-expanded="false" ng-click="category_filter = 'boys'; age_filter = 'u14'">
                                            <i class="fa fa-chevron-right"></i>
                                            <span class="hide-menu"> Boys Under-14</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" aria-expanded="true" ng-click="category_filter = 'girls'; age_filter = 'u14'">
                                            <i class="fa fa-chevron-right"></i>
                                            <span class="hide-menu"> Girls Under-14</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" aria-expanded="false" ng-click="category_filter = 'boys'; age_filter = 'u15'">
                                            <i class="fa fa-chevron-right"></i>
                                            <span class="hide-menu"> Boys Under-15</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" aria-expanded="false" ng-click="category_filter = 'boys'; age_filter = 'u17'">
                                            <i class="fa fa-chevron-right"></i>
                                            <span class="hide-menu"> Boys Under-17</span>
                                            </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" aria-expanded="true" ng-click="category_filter = 'girls'; age_filter = 'u17'">
                                            <i class="fa fa-chevron-right"></i>
                                            <span class="hide-menu"> Girls Under-17</span>
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
                        <h3 class="text-themecolor">Add Winners / {{category_filter}} - {{age_filter}}</h3>
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
                                <form ng-submit="my_Func()" class="form-material" >
                                    <div class="form-group">
                                        <div class="row form-group">
                                            <div class="col-lg-2 col-md-2">
                                                <label>Select Event :</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10">
                                                <select name="event" id="event" class="form-control" ng-model="event_select">
                                                    <option ng-value="school.event_id"  ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter} | unique : 'event' ">{{school.event}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-2 col-md-2">
                                                First :
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="first" id="first" ng-model="first" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} | unique : 'school' ">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" ng-model="first_details" placeholder="enter first details">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-2 col-md-2">
                                                Second :
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="second" id="second" ng-model="second" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} | unique : 'school' ">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" ng-model="second_details" placeholder="enter second details">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-2 col-md-2">
                                                Third :
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="third" id="third" ng-model="third" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} | unique : 'school' ">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" ng-model="third_details" placeholder="enter third details">
                                            </div>
                                        </div>
                                        <div class="form-group center-text">
                                            <button type="submit" class="btn btn-success waves-effect waves-dark">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Pending Orders -->
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
    <!-- Sweet Alert -->
    <script src="js/sweetalert.min.js"></script>
    <!-- angular ui -->
    <script src="js/angular-ui.js"></script>

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

    <script type="text/javascript">
        var app = angular.module('winnerApp', ['ui', 'ui.filters']);
        app.controller('mainController', function($scope, $http) {
            $http.get('json/add_winners_json.php')
                .then(function(res) {
                    $scope.schools = res.data;
                    $scope.category_filter = 'boys';
                    $scope.age_filter = 'u14';
                    $scope.first_details ="";
                    $scope.second_details ="";
                    $scope.third_details ="";
                }); //get end

            $scope.my_Func = function () {
                console.log("event: "+$scope.event_select);
                console.log("first: "+$scope.first+" Details: "+$scope.first_details);
                console.log("second: "+$scope.second+" Details: "+$scope.second_details);
                console.log("third: "+$scope.third+" Details: "+$scope.third_details);

                if(isNaN($scope.event_select) || isNaN($scope.first) || isNaN($scope.second) || isNaN($scope.third))
                {
                    swal("Please fill in all the details","","warning");
                    return 0;
                }
                if($scope.first == $scope.second || $scope.second == $scope.third || $scope.first == $scope.third)
                {
                    swal("Same school can't have multiple positions","","warning");
                    return;
                }
                $.ajax({
                    type : "POST",
                    url : "submit/submit_add_winners.php",
                    data : {
                        event_id : $scope.event_select,
                        first : $scope.first,
                        second : $scope.second,
                        third : $scope.third,
                        first_details : $scope.first_details,
                        second_details : $scope.second_details,
                        third_details : $scope.third_details,
                        category : $scope.category_filter,
                        age : $scope.age_filter
                    }
                })
                .done(function(data){
                    console.log(data);
                    data = JSON.parse(data);
                    swal(data.title, data.message, data.status);
                });

            }
        }); // controller end
    </script>
</body>

</html>
