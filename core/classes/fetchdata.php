<?php

class fetchdata extends users
{
    public function Load_Datapengajuan()
    {
        $show_Datapengajuan = $this->show_Datapengajuan();
        $show_Datapengajuan->execute();
        while ($R_pengajuan = $show_Datapengajuan->fetch(PDO::FETCH_ASSOC)) {
            ?>
                        <tr>
                            <td><?= $R_pengajuan["nim"]; ?></td>
                            <td><?= $R_pengajuan["nama_depan"] . " " . $R_pengajuan["nama_belakang"]; ?></td>
                            <td><?= $R_pengajuan["judul_skripsi"]; ?></td>
                            <td><?= $R_pengajuan["status_judul"]; ?></td>
                            <td><?= $R_pengajuan["keterangan"]; ?></td>
                            <td>                
                                <p class="mt-3"><img src="assets/imgKwitansi/<?=$R_pengajuan['bukti_kwitansi']; ?>" alt="img-bukti-kwitansi" width="100px"></p>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary btn-icon-split btn-sm mt-1 center-block d-block mx-auto">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-success btn-icon-split btn-sm mt-1 center-block d-block mx-auto">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
      
    }

    public function Load_CetakDatakaryawan()
    {
        $show_CetakDatakaryawan = $this->show_CetakDatakaryawan();
        while ($R_Karyawan = $show_CetakDatakaryawan->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td>
                    <p class="mt-3"><img src="assets/imgUsers/<?= $R_Karyawan["img_users"]; ?>" alt="img-profile-alternatif-kampus" width="100px"></p>
                </td>
                <td><?= $R_Karyawan["nama_depan"] . ' ' . $R_Karyawan["nama_belakang"]; ?></td>
                <td><?= $R_Karyawan["email"]; ?></td>
                <td><?= $R_Karyawan["no_hp"]; ?></td>
            </tr>
<?php
            $no++;
        }
    }
}
?>