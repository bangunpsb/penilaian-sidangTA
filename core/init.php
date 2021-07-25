<?php
// mengakses file kelas (penghubung data setiap kelas)
include 'classes/db.php';
include 'classes/users.php';
include 'classes/cetakdata.php';
include 'classes/fetchdata.php';

// buat session karena ini akan diletakkan di awal kali dari indeks
session_start();

//  return setiap class disini
$getfromUsers = new users();
$getfromFetchdata = new fetchdata();
$getfromCetakdata = new cetakdata();

// mengakses action
include 'action.php';

define('BASEURL', 'http://localhost/github/penilaian-sidangTA/');
