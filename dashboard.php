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
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center"> <!-- tambahkan kelas text-center di sini -->
                        <img src="img2/img_sella1.jpeg" class="d-block mx-auto w-25"  alt="...">
                    </div>
                </div>
                <div class="card">
            <h5 class="card-header text-center">MARCELLA AULIA MARTHA</h5>
            <div class="card-body">
              <h5 class="card-title">Saya adalah seorang wanita kelahiran Tangerang, 07 Juli 2003. Saya adalah anak pertama dari 3 bersaudara, saya tinggal dan di besarkan di kota tangerang selatan.</h5>
              <p class="card-text">Tekan tombol di bawah ini untuk informasi dan biografi lebih lanjut tentang saya.</p>
              <a href="info.php" class="btn btn-primary">Go to My Info</a>
            </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Link ke file JavaScript Bootstrap (opsional, tergantung pada kebutuhan Anda) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
