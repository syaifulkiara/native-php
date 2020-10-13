<?php
session_start();
include "adminweb/koneksi.php";
$db->close();
session_destroy();
header('location: login.php');