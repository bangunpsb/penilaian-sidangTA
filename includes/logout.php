<?php
$id = $_SESSION['id'];
$getfromUsers->logout($id);
session_destroy();
