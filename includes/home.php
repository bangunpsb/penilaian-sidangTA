 <title>Home</title>
 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
     </div>

     <!-- Content Row -->
     <div class="row">

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-primary shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Surat Karyawan</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countRow; ?></div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-envelope fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-success shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                 Jumlah Karyawan</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $countDivisi; ?></div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>



     <!-- Content Row -->

     <div class="row">

         <!-- Area Chart -->
         <div class="col-xl-12 col-lg-12">
             <div class="card shadow mb-4">
                 <!-- Card Header - Dropdown -->
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Tentang Pengguna</h6>
                 </div>
                 <!-- Card Body -->
                 <div class="card-body">
                     <div class="qrcode">
                         <form>
                             <div class="form-group font-weight-bold">
                                 <label for="formGroupExampleInput" class="font-weight-bold">Nama Lengkap</label>
                                 <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $loginRow['nama_depan'] . " " . $loginRow['nama_belakang']; ?>" readonly>
                             </div>
                             <div class="form-group font-weight-bold">
                                 <label for="formGroupExampleInput2">No Hp</label>
                                 <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $loginRow['no_hp']; ?>" readonly>
                             </div>
                             <div class="form-group font-weight-bold">
                                 <label for="formGroupExampleInput" class="font-weight-bold">Email</label>
                                 <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $loginRow['email']; ?>" readonly>
                             </div>
                             <div class="form-group font-weight-bold">
                                 <label for="formGroupExampleInput2">Hak Akses</label>
                                 <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $loginRow['level']; ?>" readonly>
                             </div>
                         </form>
                     </div>
                 </div>

             </div>
         </div>



     </div>
     <!-- /.container-fluid -->