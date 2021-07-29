<title>Pengajuan Sidang</title>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Karyawan</h1> -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan Sidang</h6>
        </div>

        <div class="card-body">
            <button type="button" class="btn btn-primary btn-icon-split btn-sm mb-3" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">Pengajuan Sidang</span>
            </button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nim</th>
                            <th>Nama Lengkap</th>
                            <th>Judul Skripsi</th>
                            <th>Status Judul</th>
                            <th>keterangan</th>
                            <th>Bukti_kwitansi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody id="Show_Datapengajuan">
                        <?php
                        $getfromFetchdata->Load_Datapengajuan();
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
                <h5 class="modal-title" id="exampleModalLabel">Ajukan Skripsi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nim</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Judul Skripsi</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Upload Kwitansi</label>
                        <input type="file" id="imgDaftar" class="form-control form-control-lg" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success">Ajukan</button>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->