<?php
// pages
if (isset($_GET['page'])) {
    if ($_GET['page'] == "logout") {
        require "includes/logout.php";
    } elseif ($_GET['page'] == "login") {
        require "includes/login.php";
    } elseif ($_GET['page'] == "lupa_password") {
        require "includes/lupaPassword.php";
    } elseif ($_GET['page'] == "pass_baru") {
        require "includes/pass_baru.php";
    } elseif ($_GET['page'] == "daftar") {
        require "includes/daftar.php";
    } else {
        require "includes/index.php";
    }
} else {
    require "includes/login.php";
}
