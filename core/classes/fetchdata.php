<?php

class fetchdata extends users
{
    public function Load_Datakaryawan()
    {
        $show_Datakaryawan = $this->show_Datakaryawan();
        while ($R_Karyawan = $show_Datakaryawan->fetch(PDO::FETCH_ASSOC)) {
?>
            <tr>
                <td>
                    <p class="mt-3"><img src="assets/imgUsers/<?= $R_Karyawan["img_users"]; ?>" alt="img-profile-alternatif-kampus" width="100px"></p>
                </td>
                <td><?= $R_Karyawan["nama_depan"] . ' ' . $R_Karyawan["nama_belakang"]; ?></td>
                <td><?= $R_Karyawan["email"]; ?></td>
                <td><?= $R_Karyawan["no_hp"]; ?></td>
                <td class="text-center">
                    <a href="#" class="btn btn-primary btn-icon-split btn-sm mt-1 center-block d-block mx-auto">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-icon-split btn-sm mt-1 center-block d-block mx-auto">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon-split btn-sm mt-1 center-block d-block mx-auto">
                        <i class="fas fa-trash-alt"></i>
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



