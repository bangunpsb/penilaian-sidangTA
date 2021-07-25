<?php

if (empty($_GET['token'])) {
    header('location:login');
} else if (isset($_GET['token'])) {
?>

    <title>Password Baru</title>
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
                                        <h1 class="h4 text-gray-900 mb-2">Password Baru</h1>
                                    </div>

                                    <form class="user">
                                        <div class="form-group">
                                            <input type="password" class="passwordLogin form-control form-control-user" id="ubahPassword" placeholder="Password Baru">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="passwordLogin form-control form-control-user" id="ulangiubahPassword" placeholder="Ulangi Password Baru">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Lihat Password</label>
                                            </div>
                                        </div>
                                        <input id="token" type="hidden" value="<?= $_GET['token']; ?>">
                                        <button type="button" class="btn_ubahPassword btn btn-danger btn-user btn-block">Ganti Password</button>
                                    </form>

                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?php

}
?>