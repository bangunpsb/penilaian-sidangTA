<?php
if ($_GET['page'] == "home") {
    require "includes/home.php";
} else if ($_GET['page'] == "data_karyawan") {
    require "includes/data_karyawan.php";
} else if ($_GET['page'] == "gaji_karyawan") {
    require "includes/gaji_karyawan.php";
} else if ($_GET['page'] == "laporan_data_karyawan") {
    require "includes/laporan_data_karyawan.php";
} else if ($_GET['page'] == "laporan_gaji_karyawan") {
    require "includes/laporan_gaji_karyawan.php";
} else if ($_GET['page'] == "konfigurasi_app") {
    require "includes/konfigurasi_app.php";
} else if ($_GET['page'] == "ubah_password") {
    require "includes/ubah_password.php";
} else if ($_GET['page'] == "profile") {
    require "includes/profile.php";
} else if ($_GET['page'] == "lupa_password") {
    require "includes/lupaPassword.php";
} else {
    require "includes/login.php";
}
