<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<style>
#mapid { height: 680px; }
label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}
input,
label {
    margin: .4rem 0;
}
</style>
   
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
crossorigin=""></script>
</head>


<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="{{ url('/admin') }}">
                            <h2 class="brand-text">DashBoard</h2>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                      
                    </ul>
                    <ul class="nav navbar-nav float-right">
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ url('/logout') }}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>Dashboard</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                </li>
                   <li><a class="menu-item" href="{{ url('/admin') }}"><i class="ft-home"> Dashboard Home</i></a>
                                </li>
            <li><a class="menu-item" href="{{ url('/upload/image') }}"><i class="ft-box"> Upload Items</i></a>
                                </li>
             <li><a class="menu-item" href="{{ url('/recognition') }}"><i class="ft-eye"> Gait Recognition</i></a>
                                </li>
     <li><a class="menu-item" href="{{ url('/smaralertimage') }}"><i class="ft-camera"> SmartAlert Image</i></a>
                                </li>
           <li><a class="menu-item" href="{{ url('/smaralert') }}"><i class="ft-briefcase"> SmartAlert Video</i></a>
                                </li>
           <li><a class="menu-item" href="{{ url('/data') }}"><i class="ft-briefcase"> DataTable</i></a>
                                </li>
              <li><a class="menu-item" href="{{ url('/maps') }}"><i class="ft-map"> Locate with Map</i></a>
                    </li>
                    <li><a class="menu-item" href="{{ url('/want') }}"><i class="ft-file"> Wanted Data</i></a>
                    </li>
                    <li><a class="menu-item" href="http://66.85.77.82:3388"><i class="ft-menu"> Mapping and Profiling</i></a>
                    </li>
                         <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">Live Examples</span><span class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="https://66.85.77.82:3000/">Object Detection</a>
                        </li>
                        <li><a class="menu-item" href="http://66.85.77.82:3001/face_detection">Face Detection</a>
                        </li>
                        <li><a class="menu-item" href="https://66.85.77.82:3002/">Posenet</a>
                        </li>
                    </ul>
                </li>
                    <li class=" nav-item"><a href="#"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Output data</span><span class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ url('/facerec') }}">Face Detection</a>
                        </li>
                        <li><a class="menu-item" href="{{ url('numberplate') }}">Number Plate</a>
                        </li>
                        <li><a class="menu-item" href="{{ url('/objectdec') }}">Object Detection</a>
                        </li>
                    </ul>
                </li>
 <li><a class="menu-item" href="{{ url('/changep') }}"><i class="ft-user"> Profile</i></a>
                    </li>
            </ul>
        </div>
    </div>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        @yield('content')
                    </div>
                </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>

    <script src="{{ asset('app-assets/vendors/js/extensions/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/knob.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/raphael-min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/morris.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('app-assets/data/jvector/visitor-data.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/chart.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/unslider-min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-climacon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.min.css') }}">

    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>

    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
  <script src=".{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    
    <script>
        $('#zero_config').DataTable();
    </script>
</body>
</html>
