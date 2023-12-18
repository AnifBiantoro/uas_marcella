<?php
    session_start();
    if($_SESSION['status'] != 'login'){
        header("location:dashboard.php");
    }

    include 'koneksi.php';

    if(isset($_POST['bsubmit'])){
        mysqli_query($koneksi, "INSERT INTO pasien SET
        nama_pasien     = '$_POST[nama_pasien]',
        usia            = '$_POST[usia]',
        jenis_kelamin   = '$_POST[jenis_kelamin]',
        alamat          = '$_POST[alamat]',
        no_hp           = '$_POST[no_hp]'");
    {
        echo "<script>
        alert('Data pasien ditambahkan!');
        window.location.href= 'diagnosa2.php';
    </script>";
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <!-- Link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Link ke file CSS tambahan untuk styling sidebar -->
    <script>
    function confirmLogout() {
        var result = confirm("Apakah Anda yakin ingin logout?");
        if (result) {
            // Jika user mengklik "OK", lakukan logout atau alur yang sesuai di sini
            window.location.href = "logout.php"; // Ganti dengan URL logout sesuai dengan struktur Anda
        }
    }
</script>
</head>
<body>
    <header>
    <nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    </header>
<div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar">
      <div class="logo">
      <h2>Marcella Aulia Martha</h2>
      </div>
        <div class="position-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard.php">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="info.php">
                        About Me
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="jawaban1.php">
                    Jawaban 1
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="index.html" onclick="confirmLogout();">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Konten -->
    <div class="main-content">
    <div class="card">
  <h5 class="card-header text-center"> Marcella Aulia Martha - 211011400759</h5>
  <div class="card-body">
    <h5 class="card-title">Jawaban Pertanyaan No 1</h5>
    <p class="card-text">
    Website adalah kumpulan halaman web yang saling terhubung dan dapat diakses melalui internet. Cara kerjanya melibatkan beberapa elemen utama, termasuk web server, domain, dan hosting.
<p>
1. Web Server:
   - Web server adalah perangkat keras atau perangkat lunak yang menyimpan, mengelola, dan mengirimkan halaman web kepada pengguna yang memintanya.
   - Saat seseorang mengakses sebuah situs web, permintaan dikirim ke web server yang kemudian mengirimkan halaman web yang diminta kembali kepada pengguna.
</p>
<p>
2. Domain:
   - Domain adalah alamat unik yang digunakan untuk mengidentifikasi suatu situs web di internet.
   - Misalnya, dalam "www.nama-situs.com", "nama-situs.com" adalah domain. Domain membantu pengguna menemukan dan mengakses situs web dengan mudah.
</P>
<p>
3. Hosting:
   - Hosting adalah layanan yang menyediakan tempat untuk menyimpan semua file dan data yang dibutuhkan oleh situs web di server.
   - Saat seseorang membuat situs web, file-file tersebut diunggah ke server hosting. Hosting memberikan akses publik ke situs tersebut.
</p>
<p>
Hubungan:
<p>
   - Ketika seseorang mengetikkan domain (contoh: www.nama-situs.com) di browser, permintaan tersebut dikirim ke server domain.
</p>
<p>  
   - Server domain memetakan domain ke alamat IP yang sesuai dengan server hosting.
</p>
<p>   
   - Setelah itu, web server di hosting menerima permintaan, mengambil halaman web yang diminta, dan mengirimkannya kembali kepada pengguna melalui internet.
</p>
</p>
<p>
Jadi, secara singkat, web server menyimpan dan mengelola halaman web, domain adalah alamat unik untuk mengakses situs, dan hosting menyediakan tempat untuk menyimpan semua data situs tersebut. Semua elemen ini bekerja bersama untuk memungkinkan pengguna mengakses dan menavigasi situs web.
</p>  
</p>
  </div>
  <div class="card-footer text-muted text-center">
    Universitas Pamulang - Teknik Informatika
  </div>
</div>

<!-- Link ke file JavaScript Bootstrap (opsional, tergantung pada kebutuhan Anda) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
