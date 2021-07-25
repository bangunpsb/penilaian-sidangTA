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


if (isset($_POST['namaDepan_daftar'])) {
    require '../assets/phpmailer/src/Exception.php';
    require '../assets/phpmailer/src/PHPMailer.php';
    require '../assets/phpmailer/src/SMTP.php';
    $imgDaftar = $_FILES['imgDaftar']['name'];
    $lokasi_imgDaftar = $_FILES['imgDaftar']['tmp_name'];
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
    $set = $getfromUsers->daftarUser($imgDaftar, $lokasi_imgDaftar, $namaDepan_daftar, $namaBelakang_daftar, $email_daftar, $nohp_daftar, $password_daftar, $token, $level_daftar, $status_daftar);
}







// ACTION LOAD TABLE
// page data_karyawan
if (isset($_POST['Show_Datakaryawan'])) {
    $getfromFetchdata->Load_Datakaryawan();
}

if (isset($_POST['Show_CetakDatakaryawan'])) {
    $getfromFetchdata->Load_CetakDatakaryawan();
}
