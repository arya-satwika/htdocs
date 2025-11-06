<?php
    $host = "localhost";
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'test';

    $connection = mysqli_connect($host, $dbuser, $dbpass, $dbname);

    if ($connection) {
        echo "Koneksi Berhasil<br>";
    }
    else {
        echo "Koneksi Gagal: " . mysqli_connect_error();
    }
?>