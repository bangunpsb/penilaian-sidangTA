<title>Daftar Akun Baru</title>
<?php
if (isset($_GET['verEmail'])) {
    $token = $_GET['verEmail'];
    $verAccount = $getfromUsers->updateAccount($token);
}

?>
<!-- <div id="getToken" class="<?= $_GET['verEmail']; ?>"></div> -->
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">

                            <!-- message success or fail send reset link -->
                            <?php if (isset($_SESSION["msgVer"])) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <?= $_SESSION["msgVer"]; ?>
                                    <?php unset($_SESSION["msgVer"]); ?>
                                </div>
                            <?php } ?>

                            <h1 class="h4 text-gray-900 mb-4">Buat Akun Anda !</h1>
                        </div>
                        <form class="user" enctype="multipart/form-data">
                            <!-- preview img -->
                            <div class="col-md-12 form-group">
                                <div class="text-center" id="previewImg"></div>
                            </div>

                            <!-- image -->
                            <div class="col-md-12 form-group">
                                <label for="img">Profile gambar</label>
                                <input type="file" id="imgDaftar" class="form-control form-control-lg" onchange="viewImg()" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nim_daftar" placeholder="Nim" maxlength="12">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="namaDepan_daftar" placeholder="Nama Depan">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="namaBelakang_daftar" placeholder="Nama Belakang">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email_daftar" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nohp_daftar" placeholder="No Hp" maxlength="12">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="passwordLogin form-control form-control-user" id="password_daftar" placeholder="Kata Sandi">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="passwordLogin form-control form-control-user" id="passwordUlangi_daftar" placeholder="Ulangi Kata Sandi">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Lihat Password</label>
                                </div>
                            </div>
                            <button type="button" class="daftar btn btn-primary btn-user btn-block">
                                Daftar
                            </button>
                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="lupa_password">Lupa Password?</a>
                        </div>
                        <div class="text-center mt-2">
                            <a class="small" href="login">Sudah Punya Akun? Silahkan Masuk!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>