<?php

    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password=  '$password'");
    $both = mysqli_num_rows($cek);
    if($both > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location:dashboard.php");
    }else{
        echo "<script>
            alert('Username atau Password yang anda masukkan salah, Silahkan coba lagi!');
            window.location.href= 'index.php';
        </script>";
    }
?>