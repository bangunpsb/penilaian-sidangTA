<title>Laporan Data Karyawan</title>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Karyawan</h1> -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan Data Karyawan</h6>
        </div>

        <div class="card-body">
            <div class="form-group font-weight-bold text-primary">
                <label for="exampleFormControlSelect1">Berdasarkan</label>
                <select class="form-control col-sm-2" id="exampleFormControlSelect1">
                    <option>Aktif</option>
                    <option>Tidak Aktif</option>
                </select>
            </div>
            <a href="includes/cetak_data_karyawan.php" target="_blank" class="btn btn-primary btn-icon-split btn-sm mb-2">
                <span class="icon text-white-50">
                    <i class="fas fa-print"></i>
                </span>
                <span class="text">Data Karyawan</span>
            </a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No HP</th>        
                        </tr>
                    </thead>

                    <tbody id="Show_CetakDatakaryawan">
                        <?php
                        $getfromFetchdata->Load_CetakDatakaryawan();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Alamat</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">Tambah</button>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->