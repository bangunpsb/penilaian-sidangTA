<?php
// cek session yg login
if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'user' || $_SESSION['level'] == 'dosen' && $_SESSION['status'] == 1) {
    $logId = $_SESSION["id"];
    $logLevel = $_SESSION["level"];
    $loginRow = $getfromUsers->userLogin($logId);
    $countRow = $getfromUsers->userCount();
    $countDivisi = $getfromUsers->levelCount();
} else {
    header('location:login');
}
?>

<!-- membatasi menu yg login -->
<div id="cek_levelLogin" class="<?= $logLevel; ?>"></div>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="sidebar-brand-text mx-3"><?= $loginRow['level']; ?></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="home">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <li id="menukaryawan_user" class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pegawai" aria-expanded="true" aria-controls="pegawai">
                <i class="fas fa-fw fa-users text-gray-400"></i>
                <span>Karyawan</span>
            </a>
            <div id="pegawai" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Karyawan:</h6>
                    <a class="collapse-item" href="data_karyawan">Data Karyawan</a>
                    <a class="collapse-item" href="gaji_karyawan">Gaji Karyawan</a>
                </div>
            </div>
        </li>

        <li id="menulaporan_user" class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
                <i class="fas fa-fw fa-print text-gray-400"></i>
                <span>Laporan</span>
            </a>
            <div id="laporan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Laporan:</h6>
                    <a class="collapse-item" href="laporan_data_karyawan">Laporan Data Karyawan</a>
                    <a class="collapse-item" href="laporan_gaji_karyawan">Laporan Gaji Karyawan</a>
                </div>
            </div>
        </li>

        <li id="menukonfigurasi_user" class="nav-item">
            <a class="nav-link" href="konfigurasi_app">
                <i class="fas fa-fw fa-cog "></i>
                <span>Konfigurasi Aplikasi</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="ubah_password">
                <i class="fas fa-fw fa-key"></i>
                <span>Ubah Password</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="logout" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-fw fa-power-off"></i>
                <span>Logout</span>
            </a>

        </li>


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

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block">
                    </div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $loginRow['nama_depan']; ?></span>
                            <img class="img-profile rounded-circle" src="assets/imgUsers/<?= $loginRow['img_users']; ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profile">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Update Profile
                            </a>
                            <div class="dropdown-divider"></div>
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

                <?php
                // pages to dashboard
                include('core/pages_dashboard.php');
                ?>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>
                        Copyright &copy; Bangun Pasaribu
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Ingin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- <div class="modal-body">Pilih logout untuk keluar dari akun ini.</div> -->
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="logout">Keluar</a>
            </div>
        </div>
    </div>
</div>