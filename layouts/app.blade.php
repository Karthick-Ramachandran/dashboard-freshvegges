<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href=".{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
  
<script type="text/javascript" src="{{ asset('vis-4.21.0/dist/vis.js') }}"></script>
    <link href="{{ asset('vis-4.21.0/dist/vis.css') }}" rel="stylesheet" type="text/css" />
    <title>Freshveggies</title>
    <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
  <style>
        .map { height: 680px;
        width: 700px; }
#mynetwork {
            width: 1200px;
            height: 800px;
            border: 1px solid rgb(235, 8, 8);
        }
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

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
 
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        <b class="logo-icon p-l-10">        
                            Admin Dashboard                  
                        </b>
                        <span class="logo-text">
                            
                        </span>
                        
                    </a>
               
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                   
                    <ul class="navbar-nav float-right">
                     
                        <li class="nav-item dropdown">
                        <a href="{{ url('/logout') }}" class="text-white" > logout </a>                        
                        </li>
                  
                    </ul>
                </div>
            </nav>
        </header>
  
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/admin')}}" aria-expanded="false"><i class="mdi mdi mdi-chart-bar"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/upload/image') }}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Upload</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/recognition')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Gait recognition</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/smaralertimage')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Smart Alert with Image</span></a></li>
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/gait/upload')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Gait Upload</span></a></li>

                       
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/smaralert')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Smart Alert with Video</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/maps')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Maps</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/want') }}"" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Wanted</span></a></li>

                       
 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('data') }}"" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Data Table</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Live </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://66.85.77.82:3000" target="_blank" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Object detection</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://66.85.77.82:3001/face_detection" target="_blank" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Face detection</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://66.85.77.82:3002" target="_blank" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Posenet</span></a></li>
                            </ul>

                        </li>
 <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Face Recognition </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/facerec') }}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Face Recognition</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/numberplate') }}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Number Plate</span></a></li>
                            </ul>

                            
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/mapp')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Mapping and Profiling</span></a></li>

                                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/changep')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/objectdec') }}"" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Object Detection</span></a></li>


                    </ul>
                </nav>
            </div>
        </aside>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3">

        </div>
        <div class="col-xl-9 col-lg-9 col-md-9">
                @yield('content')

        </div>
    </div>

    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src=".{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    
    <script>
        $('#zero_config').DataTable();
    </script>

    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/chart/chart-page-init.js')}}"></script>

    
</body>
</html>
            
