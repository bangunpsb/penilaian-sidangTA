<title>Lupa Password</title>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <!-- message success or fail send reset link -->
                                    <?php if (isset($_SESSION["msgStatus1"])) { ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <?= $_SESSION["msgStatus1"]; ?>
                                            <?php unset($_SESSION["msgStatus1"]); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_SESSION["msgStatus2"])) { ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <?= $_SESSION["msgStatus2"]; ?>
                                            <?php unset($_SESSION["msgStatus2"]); ?>
                                        </div>
                                    <?php } ?>
                                    <h1 class="h4 text-gray-900 mb-2">Lupa Password</h1>
                                </div>
                                <form class="user" method="POST">
                                    <div class="form-group">
                                        <input type="email" id="resetemail" class="form-control form-control-user" placeholder="Email Anda...">
                                    </div>
                                    <input type="submit" id="resetpass" class="btn btn-danger btn-user btn-block" value="Reset Password">
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="daftar">Buat Akun!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login">Sudah Punya Akun? Silahkan Masuk!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>