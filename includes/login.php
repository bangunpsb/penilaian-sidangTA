<?php
print_r($_SESSION);
// session_unset();
// exit();
?>
<title>Login</title>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
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
                                    <p>
                                        <!-- div ini jangan dihapus utk menyampaikan pesan -->
                                    <div id="messageLogin"></div>
                                    </p>
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang !</h1>
                                </div>
                                <form class="user" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="emailLogin form-control form-control-user" id="emailLogin" aria-describedby="emailHelp" placeholder="Silahkan Masukkan Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="passwordLogin form-control form-control-user" id="passwordLogin" placeholder="Kata Sandi">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Lihat Password</label>
                                        </div>
                                    </div>
                                    <button type="button" class="loginUser btn btn-primary btn-user btn-block">Masuk</button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="lupa_password">Lupa Password?</a>
                                </div>
                                <div class="text-center mt-2">
                                    <a class="small" href="daftar">Silahkan Daftar Disini!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>