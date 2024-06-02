<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico">



    <!-- Bootstrap Css -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

            <!-- DataTables -->
            <link href="{{asset('assets')}}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
            {{-- <link href="{{asset('assets')}}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" --}}
                {{-- type="text/css" /> --}}
        
            <!-- Responsive datatable examples -->
            <link href="{{asset('assets')}}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
                type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets')}}/css/app.min.css" id="app-style"  rel="stylesheet" type="text/css" />

</head>

<body data-layout="detached" data-topbar="colored">



    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="container-fluid">
                    <div class="float-end">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>



                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('assets')}}/images/users/avatar-2.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">User</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item text-danger" href="/logout"><i
                                        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                    <div>
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets')}}/images/logo-sm.png" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets')}}/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets')}}/images/logo-sm.png" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets')}}/images/logo-light.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                            id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    </div>

                </div>
            </div>
        </header> <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{asset('assets')}}/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <!-- <div class="mt-3">

                <a href="#" class="text-reset fw-medium font-size-16">Patrick Becker</a>
                <p class="text-muted mt-1 mb-0 font-size-13">UI/UX Designer</p>

            </div> -->
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/dashboard">Dashboard</a></li>
                    </ul>
                </li>

                @if (auth()->user()->is_admin != '1')
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-file-hidden"></i>
                            <span>Profil</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/dashboard/profile">Profil</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-clock-check"></i>
                            <span>Absensi</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/dashboard/absensi">Absensi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-clock-check"></i>
                            <span>Pengajuan</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/dashboard/pengajuan">Pengajuan</a></li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-file-document-box-search"></i>
                            <span>Laporan</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/dashboard/reports">Laporan</a></li>
                        </ul>
                    </li>
                    @can('admin')
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Karyawan</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/dashboard/employees/create">Tambah Data</a></li>
                            <li><a href="/dashboard/employees">Data Karyawan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bx-shield-alt"></i>
                            <span>Divisi</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/dashboard/divisions/create">Tambah Data</a></li>
                            <li><a href="/dashboard/divisions">Data Divisi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="mdi mdi-clock-check"></i>
                            <span>Pengajuan</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/dashboard/pengajuan-admin">Pengajuan</a></li>
                        </ul>
                    </li>
                    @endcan


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                @yield('container')

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Absensi.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<!-- JAVASCRIPT -->
<script src="{{asset('assets')}}/libs/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('assets')}}/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('assets')}}/libs/node-waves/waves.min.js"></script>
<script src="{{asset('assets')}}/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

<script src="{{asset('assets')}}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
{{-- <script src="{{asset('assets')}}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets')}}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets')}}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script> --}}
<!-- Responsive examples -->
<script src="{{asset('assets')}}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script>
    // $('#table-hover').Datatable();
    // $("#datatable").DataTable();
</script>

<!-- Datatable init js -->
<script src="{{asset('assets')}}/js/pages/datatables.init.js"></script>


<!-- App js -->
<script src="{{asset('assets')}}/js/app.js"></script>

</body>

</html>