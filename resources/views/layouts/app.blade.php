<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Restaurant Menus</title>
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{ asset('assets/js/pace.min.js')}}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">

<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="#">
                <img src="{{ asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Menu Works</h5>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header"></li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-accounts"></i> <span>Users</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-album"></i> <span>Brands</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-balance"></i> <span>Restaurants</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-assignment"></i> <span>Menus</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-assignment"></i> <span>Menu Items</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-card"></i> <span>Categories</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-balance-wallet"></i> <span>Locations</span>
                </a>
            </li>








        </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="Enter keywords">
                        <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <!-- <li class="nav-item dropdown-lg">
                     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                         <i class="fa fa-envelope-open-o"></i></a>
                 </li>
                 <li class="nav-item dropdown-lg">
                     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                         <i class="fa fa-bell-o"></i></a>
                 </li>
                 <li class="nav-item language">
                     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                     <ul class="dropdown-menu dropdown-menu-right">
                         <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                         <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                         <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                         <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                     </ul>
                 </li>-->
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                        <p class="user-subtitle">mccoy@example.com</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <!--<li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                        <li class="dropdown-divider"></li>-->
                        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Profile</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-power mr-2"></i> <a href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>

    @yield('content')
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2022 Restaurant Menus
            </div>
        </div>
    </footer>
    <!--End footer-->



</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

<!-- simplebar js -->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<!-- loader scripts -->
<script src="{{ asset('assets/js/jquery.loading-indicator.js')}}"></script>
<!-- Custom scripts -->
<script src="{{ asset('assets/js/app-script.js')}}"></script>
<!-- Chart js -->

<script src="{{ asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>

<!-- Index js -->
<script src="{{ asset('assets/js/index.js')}}"></script>


</body>
</html>

