<title>Profile Pengguna</title>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile Pengguna</h6>
        </div>
        <div class="img-user mt-4 text-center">
            <img class="img-profile rounded mx-auto d-block" src="assets/imgUsers/<?= $loginRow['img_users']; ?>" width="100px">
            <!-- <p class="mt-3"><?= $loginRow['tentang']; ?></p> -->
            <button class="btn btn-primary mt-2">Ubah Photo</button>
        </div>

        <div class="card-body">
            <form>
                <div class="form-group font-weight-bold">
                    <label for="formGroupExampleInput" class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $loginRow['nama_depan'] . " " . $loginRow['nama_belakang']; ?>">
                </div>
                <div class="form-group font-weight-bold">
                    <label for="formGroupExampleInput2">No Hp</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $loginRow['no_hp']; ?>">
                </div>
                <div class="form-group font-weight-bold">
                    <label for="formGroupExampleInput" class="font-weight-bold">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $loginRow['email']; ?>">
                </div>
                <div class="form-group font-weight-bold">
                    <label for="formGroupExampleInput2">Hak Akses</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" value="<?= $loginRow['level']; ?>">
                </div>
                <button class="btn btn-primary mt-2">Update Profile</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->