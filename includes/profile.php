<title>Profile Pengguna</title>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile Pengguna</h6>
        </div>
        <!-- <div class="img-user mt-4 text-center">
            <img class="img-profile rounded mx-auto d-block" src="assets/imgUsers/<?= $loginRow['img_users']; ?>" width="100px">
            <p class="mt-3"><?= $loginRow['tentang']; ?></p>
        </div> -->

        <div class="card-body">
            <form class="user" enctype="multipart/form-data">
                <div class="form-group font-weight-bold">
                    <label for="update_level">Hak Akses</label>
                    <input type="text" class="form-control" id="update_level" value="<?= $loginRow['level']; ?>" readonly>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="update_email" class="font-weight-bold">Email</label>
                    <input type="text" class="form-control" id="update_email" value="<?= $loginRow['email']; ?>" readonly>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="update_nim" class="font-weight-bold">Nim</label>
                    <input type="text" class="form-control" id="update_nim" value="<?= $loginRow['nim']; ?>" readonly>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="update_namaDepan" class="font-weight-bold">Nama Depan</label>
                    <input type="text" class="form-control" id="update_namaDepan" value="<?= $loginRow['nama_depan']; ?>">
                </div>
                <div class="form-group font-weight-bold">
                    <label for="update_namaBelakang" class="font-weight-bold">Nama Belakang</label>
                    <input type="text" class="form-control" id="update_namaBelakang" value="<?= $loginRow['nama_belakang']; ?>">
                </div>
                <div class="form-group font-weight-bold">
                    <label for="update_noHp">No Hp</label>
                    <input type="text" class="form-control" id="update_noHp" value="<?= $loginRow['no_hp']; ?>">
                </div>
                <button type="button" class="updateProfile btn btn-primary mt-2">Update Profile</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->