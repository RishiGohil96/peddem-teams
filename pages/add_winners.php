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
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/bootstrap-toggle.min.css">
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
                        <li class="has-arrow active">
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
                            <a class="waves-effect waves-dark" href="event_list.php" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu"> Events List</span></a>
                        </li>
                        <li>
                            <a href="#collapse_list_winners" class="collapse-toggle has-arrow" data-toggle="collapse">
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
                                                    <option ng-value="school.event_id"  ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter} | unique : 'event' | orderBy : 'event'" >{{school.event}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <h3>Winners</h3>
                                            </div>
                                            <div class="col-md-6 col-lg-6 right-text">
                                                <input checked data-toggle="toggle" data-size="normal" type="checkbox" data-onstyle="success" data-offstyle="danger" id="winner_toggle">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-2 col-md-2">
                                                First :
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="first" id="first" ng-model="first" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} : true | unique : 'school' | orderBy : 'school'" ng-if="school.s_id != second && school.s_id != third">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <input type="text" class="form-control" ng-model="first_details" placeholder="Enter first details">
                                            </div>
                                            <div class="col-md-1 col-lg-1">
                                                <i class="fa fa-times pointer" ng-click="clear_response(1)"></i>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-2 col-md-2">
                                                Second :
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="second" id="second" ng-model="second" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} : true | unique : 'school' " ng-if="school.s_id != first && school.s_id != third">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <input type="text" class="form-control" ng-model="second_details" placeholder="Enter second details">
                                            </div>
                                            <div class="col-md-1 col-lg-1">
                                                <i class="fa fa-times pointer" ng-click="clear_response(2)"></i>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-2 col-md-2">
                                                Third :
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <select name="third" id="third" ng-model="third" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} : true | unique : 'school' " ng-if="school.s_id != first && school.s_id != second">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <input type="text" class="form-control" ng-model="third_details" placeholder="Enter third details">
                                            </div>
                                            <div class="col-md-1 col-lg-1">
                                                <i class="fa fa-times pointer" ng-click="clear_response(3)"></i>
                                            </div>
                                        </div>

                                        <div class="row pad-top form-group">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <h3>Outstanding Sports Persons</h3>
                                            </div>
                                            <div class="col-md-6 col-lg-6 right-text">
                                                <input checked data-toggle="toggle" data-size="normal" type="checkbox" data-onstyle="success" data-offstyle="danger" id="op_toggle">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-2 col-lg-2">
                                                Person 1:
                                            </div>
                                            <div class="col-md-5 col-lg-5">
                                                <select ng-model="op_first_school" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} : true | unique : 'school' ">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" ng-model="op_first_name" placeholder="Enter Person 1 name">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-2 col-lg-2">
                                                Person 2:
                                            </div>
                                            <div class="col-md-5 col-lg-5">
                                                <select ng-model="op_second_school" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} : true | unique : 'school' ">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" ng-model="op_second_name" placeholder="Enter Person 2 name">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-2 col-lg-2">
                                                Person 3:
                                            </div>
                                            <div class="col-md-5 col-lg-5">
                                                <select ng-model="op_third_school" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} : true | unique : 'school' ">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" ng-model="op_third_name" placeholder="Enter Person 3 name">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-2 col-lg-2">
                                                Person 4:
                                            </div>
                                            <div class="col-md-5 col-lg-5">
                                                <select ng-model="op_fourth_school" class="form-control">
                                                    <option ng-value="school.s_id" ng-repeat="school in schools | filter : {'age' : age_filter, 'category' : category_filter, 'event_id' : event_select} : true | unique : 'school' ">{{school.school}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <input type="text" class="form-control" ng-model="op_fourth_name" placeholder="Enter Person 4 name">
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
    <!-- angular ui -->
    <script src="js/angular-ui.js"></script>
    <!-- toggle -->
    <script src="js/bootstrap-toggle.min.js"></script>

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
                    console.log(res);
                    $scope.schools = res.data;
                    $scope.first_details ="";
                    $scope.second_details ="";
                    $scope.third_details ="";
                    $scope.op_first_school = "";
                    $scope.op_second_school = "";
                    $scope.op_third_school = "";
                    $scope.op_fourth_school = "";
                    $scope.op_first_name = "";
                    $scope.op_second_name = "";
                    $scope.op_third_name = "";
                    $scope.op_fourth_name = "";
                    $scope.category_filter = 'boys';
                    $scope.age_filter = 'u14';
                    $scope.clear = 0;
                    <?php
                    if(isset($_POST['edit']))
                    {
                        if($_POST['edit'] == 'op')
                        {
                            ?>
                            $('#winner_toggle').bootstrapToggle('off');
                            <?php
                        }
                        else
                        {
                            ?>
                            $('#op_toggle').bootstrapToggle('off');
                            <?php
                        }
                        ?>
                        $scope.category_filter = "<?php echo $_POST['category'] ?>";
                        $scope.age_filter = "<?php echo $_POST['age'] ?>";
                        $scope.event_select = "<?php echo $_POST['event_id'] ?>";
                        <?php
                    }
                    ?>
                }); //get end

            $scope.my_Func = function () {
                console.log("event: "+$scope.event_select);
                console.log("first: "+$scope.first+" Details: "+$scope.first_details);
                console.log("second: "+$scope.second+" Details: "+$scope.second_details);
                console.log("third: "+$scope.third+" Details: "+$scope.third_details);
                $scope.all_clear = 0;
                if($('#winner_toggle').prop('checked') || $('#op_toggle').prop('checked'))
                {
                    if($('#winner_toggle').prop('checked'))
                    {
                        if(isNaN($scope.event_select) || isNaN($scope.first) || isNaN($scope.second) || isNaN($scope.third) || $scope.first == '' || $scope.second == '' || $scope.third == '')
                        {
                            swal("Please fill in all the details","","warning");
                            return 0;
                        }
                        else if($scope.first == $scope.second || $scope.second == $scope.third || $scope.first == $scope.third)
                        {
                            swal("Same school can't have multiple positions","","warning");
                            return;
                        }
                        else
                        {
                            $scope.all_clear = 1;
                        }
                    }

                    if($('#op_toggle').prop('checked'))
                    {
                        if(! ($scope.op_first_school && $scope.op_first_name && $scope.op_second_school && $scope.op_second_name && $scope.op_third_school && $scope.op_third_name && $scope.op_fourth_school && $scope.op_fourth_name))
                        {

                            swal({
                                title : "Incomplete outstanding persons info",
                                text : "The outstanding persons toggle is ON but you haven't entered all the data. Turn off outstanding persons toggle?",
                                type : "warning",
                                showCancelButton : true,
                                confirmButtonText : "Yes, turn off",
                                cancelButtonText : "No. Fill in missing info"
                            }, function(isConfirm) {
                                if(isConfirm)
                                {
                                    $('#op_toggle').bootstrapToggle('off');
                                    $scope.all_clear = 0;
                                }
                                else
                                {
                                    return 0;
                                }
                            });

                        }
                        else
                        {
                            $scope.all_clear= 1;
                        }
                    }
                }

                if($scope.all_clear)
                {
                    $scope.submit_form();
                }

            }   //my_Func() end

            $scope.submit_form = function() {
                console.log("submit function called");
                $scope.op_toggle = $('#op_toggle').prop('checked');
                $scope.winner_toggle = $('#winner_toggle').prop('checked');
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
                            age : $scope.age_filter,
                            op_1 : $scope.op_first_school,
                            op_1_name : $scope.op_first_name,
                            op_2 : $scope.op_second_school,
                            op_2_name : $scope.op_second_name,
                            op_3 : $scope.op_third_school,
                            op_3_name : $scope.op_third_name,
                            op_4 : $scope.op_fourth_school,
                            op_4_name : $scope.op_fourth_name,
                            winner_toggle : $scope.winner_toggle,
                            op_toggle : $scope.op_toggle
                        }
                    })
                    .done(function(data){
                        console.log(data);
                        data = JSON.parse(data);
                        swal(data.title, data.message, data.status);
                    });

                    for(var i = 1; i<=3; i++)
                    {
                        $scope.clear_response(i);
                    }
            }

            $scope.clear_response = function(position) {
                position = parseInt(position);
                switch(position)
                {
                    case 1: $scope.first = '';
                            $scope.first_details = '';
                            break;
                    case 2: $scope.second = '';
                            $scope.second_details = '';
                            break;
                    case 3: $scope.third = '';
                            $scope.third_details = '';
                            break;
                }
            }
        }); // controller end
    </script>
</body>

</html>
