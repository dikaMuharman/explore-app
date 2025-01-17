<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        @yield('css')
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-suitcase-rolling"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Explore </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Database
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->is('admin/pemesanan','admin/pemesanan/create') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pemesanan"
                    aria-expanded="true" aria-controls="Wisata">
                    <i class="fas fa-bookmark"></i>
                    <span>Pemesanan</span>
                </a>
                <div id="Pemesanan" class="collapse {{ request()->is('admin/pemesanan','admin/pemesanan/create') ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar pemesanan</h6>
                        <a class="collapse-item {{ request()->is('admin/pemesanan') ? 'active' : '' }}" href="{{ route('pemesanan.index') }}">List pesanan</a>
                        <a class="collapse-item {{ request()->is('admin/pemesanan/create') ? 'active' : '' }}" href="{{ route('pemesanan.create') }}">Tambah pesanan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->is('admin/wisata','admin/wisata/create') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Wisata"
                    aria-expanded="true" aria-controls="Wisata">
                    <i class="fas fa-location-arrow"></i>
                    <span>Wisata</span>
                </a>
                <div id="Wisata" class="collapse {{ request()->is('admin/wisata','admin/wisata/create') ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu wisata</h6>
                        <a class="collapse-item {{ request()->is('admin/wisata') ? 'active' : '' }}" href="{{ route('wisata.index') }}">Daftar wisata</a>
                        <a class="collapse-item {{ request()->is('admin/wisata/create') ? 'active' : '' }}" href="{{ route('wisata.create') }}">Tambah wisata</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->is('admin/paket-wisata','admin/paket-wisata/create') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Paket"
                    aria-expanded="true" aria-controls="Wisata">
                    <i class="fas fa-suitcase"></i>
                    <span>Paket wisata</span>
                </a>
                <div id="Paket" class="collapse  {{ request()->is('admin/paket-wisata','admin/paket-wisata/create') ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu paket wisata</h6>
                        <a class="collapse-item {{ request()->is('admin/paket-wisata') ? 'active' : '' }}" href="{{ route('paket-wisata.index') }}">Daftar paket wisata</a>
                        <a class="collapse-item {{ request()->is('admin/paket-wisata/create') ? 'active' : '' }}" href="{{ route('paket-wisata.create') }}">Tambah paket wisata</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->is('admin/atraksi','admin/atraksi/create') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Atraksi"
                    aria-expanded="true" aria-controls="Wisata">
                    <i class="fas fa-map-signs"></i>
                    <span>Atraksi wisata</span>
                </a>
                <div id="Atraksi" class="collapse {{ request()->is('admin/atraksi','admin/atraksi/create') ? 'show' : ''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Atraksi wisata</h6>
                        <a class="collapse-item {{ request()->is('admin/atraksi') ? 'active' : '' }}" href="{{ route('atraksi.index') }}">Daftar atraksi wisata</a>
                        <a class="collapse-item {{ request()->is('admin/atraksi/create') ? 'active' : '' }}" href="{{ route('atraksi.create') }}">Tambah atraksi wisata</a>
                    </div>
                </div> 
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->is('admin/review') || request()->is('admin/review/create') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Review"
                    aria-expanded="true" aria-controls="Review">
                    <i class="fas fa-star"></i>
                    <span>Review</span>
                </a>
                <div id="Review" class="collapse {{ request()->is('admin/review') || request()->is('admin/review/create') ? 'show' : ''}}" aria-labelledby="headingTree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Review pengguna</h6>
                        <a class="collapse-item {{ request()->is('admin/review') ? 'active' : ''}}" href="{{route('review.index')}}">Daftar review</a>
                        <a class="collapse-item {{ request()->is('admin/review/create') ? 'active' : ''}}" href="{{route('review.create')}}">Tambah review</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ request()->is('admin/user','admin/user/create') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pengguna"
                    aria-expanded="true" aria-controls="Pengguna">
                    <i class="fas fa-user-alt"></i>
                    <span>Pengguna</span>
                </a>
                <div id="Pengguna" class="collapse {{ request()->is('admin/user') || request()->is('admin/user/create') ? 'show' : ''}}" aria-labelledby="headingTree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List pengguna</h6>
                        <a class="collapse-item {{ request()->is('admin/user') ? 'active' : ''}}" href="{{route('user.index')}}">Daftar pengguna</a>
                        <a class="collapse-item {{request()->is('admin/user/create') ? 'active' : ''}}" href="{{route('user.create')}}">Tambah pengguna</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->username}}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                    </div>
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    @yield('js')

</body>

</html>