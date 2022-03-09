<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard - Hotel Hebat</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="/assets/dashboard/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/assets/dashboard/assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="/assets/dashboard/assets/vendors/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="/assets/dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/assets/dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/dashboard/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
        <!-- Layout styles -->
        <link rel="stylesheet" href="/assets/dashboard/assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="/assets/dashboard/assets/images/favicon.png" />
        <style>
            .content-wrapper {
                background: linear-gradient(to bottom, #9cafe5, #74e9d5);
            }
        </style>
    </head>
    <body>
        <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                    <img class="img-xs rounded-circle" src="/assets/dashboard/assets/images/faces/face.jpg" alt="">
                    <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                    <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                    <span>Resepsionis</span>
                    </div>
                </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/dataReservasi">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Data Reservasi</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                        <input type="search" class="form-control" placeholder="Cari nama tamu ..." autofocus>
                    </form>
                </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="/assets/dashboard/assets/images/faces/face.jpg" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                    </div>
                    </a>
                </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
            <!-- content-wrapper ends -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="/assets/dashboard/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="/assets/dashboard/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="/assets/dashboard/assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="/assets/dashboard/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="/assets/dashboard/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="/assets/dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="/assets/dashboard/assets/js/off-canvas.js"></script>
        <script src="/assets/dashboard/assets/js/hoverable-collapse.js"></script>
        <script src="/assets/dashboard/assets/js/misc.js"></script>
        <script src="/assets/dashboard/assets/js/settings.js"></script>
        <script src="/assets/dashboard/assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="/assets/dashboard/assets/js/dashboard.js"></script>
        <!-- End custom js for this page -->
    </body>
</html>