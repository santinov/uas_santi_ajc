<?php
    $host     = "10.0.0.152";
    $username = "admin";
    $password = "noV11+24";
    $database = "ajc";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
