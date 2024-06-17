<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEPMusic | Dashboard</title>

    <link rel="stylesheet" href="{{asset('Backend/dist/css/toaster.min.css')}}">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Backend/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('Backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-cog"></i>
                        <span class="badge badge-warning navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Logout Admin Dashboard</span>
                        <div class="dropdown-divider"></div>
                        {{-- <a href="{{route('login')}}" class="dropdown-item">--}}
                        {{-- <i class="fas fa-sign-out-alt mr-2"></i> Log Out--}}

                        {{-- </a>--}}
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('home')}}" class="brand-link">
                <img src="{{asset('Backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{config('app.name')}}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('Backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="javascript:void(0)" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-male"></i>
                                <p>
                                    Artist
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('artist.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Artist </p>
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('artist.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Artist</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-play"></i>
                                <p>
                                    My Playlist
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('my_playlist.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add My Playlist </p>
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('my_playlist.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View My Playlist</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>
                                    Favourites
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('favourite.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Favourite Songs </p>
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('favourite.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Favourite Songs</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Genre/Categories
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('genre.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Genre </p>
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('genre.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Genre</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    History
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">


                                <li class="nav-item">
                                    <a href="{{route('history.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add History</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('history.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View History </p>
                                    </a>

                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-music"></i>
                                <p>
                                    Songs
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('song.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Songs </p>
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('song.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Songs</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-audio"></i>
                                <p>
                                    Album
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('album.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Album </p>
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('album.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Album</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-comment-dots"></i>
                                <p>
                                    Contact Us
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('contact.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Contact</p>
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('contact.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Contact</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>
                                    About
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('about.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add About</p>
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{route('about.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View About</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>
                                    Register
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                

                                <li class="nav-item">
                                    <a href="{{route('register.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Register</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        </li>


                    </ul>
                    
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        @yield('Content')
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; <span id="year"></span> <a href="javascript:void(0)">{{config('app.name')}}</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Crafted By</b> <a href="http://communicate.com.np/" target="_blank">NEPMusic</a>
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- ./wrapper -->
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <!-- jQuery -->
        <script src="{{asset('Backend/plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('Backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('Backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('Backend/plugins/chart.js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('Backend/plugins/sparklines/sparkline.js')}}"></script>

        <!-- JQVMap -->
        <script src="{{asset('Backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('Backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('Backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('Backend/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('Backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('Backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('Backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('Backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('Backend/dist/js/adminlte.js')}}"></script>
        <script src="{{asset('Backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('Backend/dist/js/demo.js')}}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('Backend/dist/js/pages/dashboard.js')}}"></script>
        <script src="{{asset('Backend/dist/js/toaster.min.js')}}"></script>
        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();

            $(function() {
                bsCustomFileInput.init();
            });
        </script>

        @yield('scripts')
        @include('toaster')
    </div>
</body>

</html>