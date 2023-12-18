<?php


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'tugas_marcella';
    
    $koneksi = mysqli_connect($host, $user, $pass, $db);
    if(mysqli_connect_errno()){
        echo "Koneksi ke database gagal" . mysqli_connect_errno();
    }

?>