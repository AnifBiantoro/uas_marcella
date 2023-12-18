<?php
    session_start();
    if($_SESSION['status'] != 'login'){
        header("location:dashboard.php");
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
    <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="img2/bulan1.jpg" class="d-block mx-auto w-100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Biography</h5>
        <p class="card-text">
              Saya Marcella Aulia Martha, Seorang wanita kelahiran Tangerang, 07 Juli 2003. Saya adalah anak pertama dari 3 bersaudara, saya tinggal dan di besarkan di kota tangerang selatan, dan saat ini saya sedang menjalani pendidikan di perguruan tinggi Universitas Pamulang dengan jurusan Teknik Informatika hingga sampai saat ini telah menginjak semester 6, dan juga bekerja di salah satu perusahaan Property.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img2/bulan2_1.jpg"  class="d-block mx-auto w-100"  alt="...">
      <div class="card-body">
        <h5 class="card-title">Pendidikan</h5>
        <p class="card-text">
        Saya mengawali pendidikan di Sekolah Dasar Negeri Rawa Buntu 03, dan meneruskan pendidikan selanjutnya di SMP al-fasanah, lalu melanjutkan pendidikan di SMKN 1 Kota Tangerang Selatan, hingga saat ini sedang menjalani pendidikan di perguruan tinggi Universitas Pamulang dengan jurusan Teknik Informatika dan telah menginjak semester 6.  
      </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img2/langit1.jpg" class="d-block mx-auto w-100"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Skills</h5>
        <p class="card-text">Saya mampu berkembang dan mengikuti pendidikan di jurusan teknik informatika ini dengan baik, saya juga dapat mengoperasikan MS.Office dengan cukup baik, saya merupakan pribadi yang mempunyai semangat untuk belajar hal
                             baru dan mempunyai rasa ingin tahu yang tinggi. Saya juga memiliki beberapa
                             pengalaman kerja di bidang admin dan telemarketing.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img2/langit1.jpg" class="d-block mx-auto w-100"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pencapaian Hidup</h5>
        <p class="card-text">Saya merupakan pribadi yang mempunyai semangat untuk belajar hal
              baru dan mempunyai rasa ingin tahu yang tinggi. Memiliki beberapa
              pengalaman kerja di bidang admin dan telemarketing, salah satunya 
              di perusahaan Property selama kurang lebih 1 tahun sebagai admin 
              dan saat ini masih bekerja disana, Saya juga bergabung dalam sebuah organisasi IT bernama IT CYBER COMUNITY dan saya menjabat sebagai bendahara umum pada organisasi tersebut, saya juga pernah mengikuti organisasi permikomnas (Perhimpunan Mahasiswa Informatika dan komputer nasional).</p>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

<!-- Link ke file JavaScript Bootstrap (opsional, tergantung pada kebutuhan Anda) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
