<?php
// login
if (isset($_POST['emailLogin'])) {
    $email = $_POST['emailLogin'];
    $password = md5($_POST['passwordLogin']);
    $set = $getfromUsers->login($email, $password);
}

// ubah pass
if (isset($_POST['ubahPassword'])) {
    if (isset($_POST['token']) && $_POST['token'] != 'undefined') {
        $id = $_SESSION["id"];
        $token = $_POST['token'];
        $ubahPassword = md5($_POST['ubahPassword']);
        $set = $getfromUsers->reset_password($id, $token, $ubahPassword);
    } else {
        $id = $_SESSION["id"];
        $ubahPassword = md5($_POST['ubahPassword']);
        $set = $getfromUsers->ubah_password($id, $ubahPassword);
    }
}

// mengirim reset email
if (isset($_POST['resetemail'])) {
    require '../assets/phpmailer/src/Exception.php';
    require '../assets/phpmailer/src/PHPMailer.php';
    require '../assets/phpmailer/src/SMTP.php';
    date_default_timezone_set('Asia/Jakarta');
    $date = md5(date('d-m-Y H:i:s'));
    $token = $date;
    $resetemail = $_POST['resetemail'];
    $msg = $getfromUsers->lupaPassword($resetemail, $token);
}

// daftar
if (isset($_POST['namaDepan_daftar'])) {
    require '../assets/phpmailer/src/Exception.php';
    require '../assets/phpmailer/src/PHPMailer.php';
    require '../assets/phpmailer/src/SMTP.php';
    $imgDaftar = $_FILES['imgDaftar']['name'];
    $lokasi_imgDaftar = $_FILES['imgDaftar']['tmp_name'];
    $nim_daftar = $_POST['nim_daftar'];
    $namaDepan_daftar = $_POST['namaDepan_daftar'];
    $namaBelakang_daftar = $_POST['namaBelakang_daftar'];
    $email_daftar = $_POST['email_daftar'];
    $nohp_daftar = $_POST['nohp_daftar'];
    $password_daftar = md5($_POST['password_daftar']);
    // token md5
    date_default_timezone_set('Asia/Jakarta');
    $date = md5(date('d-m-Y H:i:s'));
    $token = $date;
    $level_daftar = 'user';
    $status_daftar = 0;
    $set = $getfromUsers->daftarUser($imgDaftar, $lokasi_imgDaftar, $nim_daftar, $namaDepan_daftar, $namaBelakang_daftar, $email_daftar, $nohp_daftar, $password_daftar, $token, $level_daftar, $status_daftar);
}

// update profile
if (isset($_POST['update_nim'])) {
    $update_nim = $_POST['update_nim'];
    $update_namaDepan = $_POST['update_namaDepan'];
    $update_namaBelakang = $_POST['update_namaBelakang'];
    $update_noHp = $_POST['update_noHp'];
    $set = $getfromUsers->updateUser($update_nim, $update_namaDepan, $update_namaBelakang, $update_noHp);
}


// ajukan skripsi
if (isset($_POST['nim_ajukan'])) {
    $nim_ajukan = $_POST['nim_ajukan'];
    $namaLengkap_ajukan = $_POST['namaLengkap_ajukan'];
    $judulSkripsi_ajukan = $_POST['judulSkripsi_ajukan'];
    $imgKwitansi = $_FILES['imgKwitansi']['name'];
    $lokasi_imgKwitansi = $_FILES['imgKwitansi']['tmp_name'];
    $set = $getfromUsers->ajukanSidang($nim_ajukan,$namaLengkap_ajukan,$judulSkripsi_ajukan,$imgKwitansi,$lokasi_imgKwitansi);
}



// ACTION LOAD TABLE
// page data_karyawan
if (isset($_POST['Show_Datakaryawan'])) {
    $getfromFetchdata->Load_Datakaryawan();
}

// data pengajuan
if (isset($_POST['Show_Datapengajuan'])) {
    // $get_Nim=$_POST['get_Nim'];
    // print_r($nim_Datapengajuan);
    // exit();

    $getfromFetchdata->Load_Datapengajuan();
}

if (isset($_POST['Show_CetakDatakaryawan'])) {
    $getfromFetchdata->Load_CetakDatakaryawan();
}
