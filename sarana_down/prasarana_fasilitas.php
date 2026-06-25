<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sarana & Prasarana - Desa Baosan Lor</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS -->
    <link href="../css/styles.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }
        #mainNav {
            background-color: #212529 !important;
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }
        .page-header {
            background-color: #212529;
            color: #fff;
            padding: 6rem 0 4rem 0;
        }
        .dropdown-menu {
            background-color: #212529;
            border: none;
        }
        .dropdown-item {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
            padding: 0.5rem 1.5rem;
        }
        .dropdown-item:hover {
            background-color: #ffc800;
            color: #212529;
        }
        .facility-card {
            border: none;
            border-top: 4px solid #1abc9c;
            transition: transform 0.2s;
        }
        .facility-card:hover {
            transform: translateY(-5px);
        }
        .icon-circle {
            width: 60px;
            height: 60px;
            background-color: #e9ecef;
            color: #1abc9c;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid px-xl-4 px-lg-3 px-md-2">

            <a class="navbar-brand d-flex align-items-center me-xl-3 me-lg-1" href="../index.php" style="text-decoration: none;">
                <img src="../assets/img/logos/Lambang_Kabupaten_Ponorogo_1969.png" alt="Logo Ponorogo" style="height: 44px; width: auto; margin-right: 8px;" />
                <div class="d-flex flex-column align-items-start lh-1" style="text-align: left;">
                    <span class="fs-4 text-uppercase" style="letter-spacing: 0.5px; font-weight: 800; color: #1abc9c;">
                        BAOSAN <span class="text-white">LOR</span>
                    </span>
                    <span class="text-muted text-uppercase mt-1" style="font-size: 0.6rem; letter-spacing: 1px; font-weight: 600;">
                        Portal Resmi Pemerintah
                    </span>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto text-uppercase align-items-center" style="font-size: 0.72rem; font-weight: 700; gap: 1px;">

                    <!-- 2. Dropdown Profil Desa -->
                    <li class="nav-item dropdown">
                        <a class="nav-link lh-sm dropdown-toggle" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#" id="navbarProfil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarProfil">
                            <li><a class="dropdown-item text-capitalize py-2" href="../profile_down/sejarah_visimisi.php">Sejarah & Visi Misi</a></li>
                            <li><a class="dropdown-item text-capitalize py-2" href="../profile_down/demografis_geografis.php">Geografis & Demografi</a></li>
                        </ul>
                    </li>

                    <!-- 3. Peta Desa -->
                    <li class="nav-item">
                        <a class="nav-link lh-sm" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="../index.php#geografis">Peta Desa</a>
                    </li>

                    <!-- 4. Berita -->
                    <li class="nav-item">
                        <a class="nav-link lh-sm" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="../index.php#news">Berita</a>
                    </li>

                    <!-- 5. Dropdown Statistik & Layanan (Pecahan Menu Statistik Lama) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link lh-sm dropdown-toggle" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#" id="navbarStatistik" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Statistik
                        </a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarStatistik">

                            <li><a class="dropdown-item text-capitalize py-2" href="../sarana_down/prasarana_fasilitas.php">Sarana & Prasarana</a></li>
                            <li><a class="dropdown-item text-capitalize py-2" href="../keuangan_down/keuangan_aset.php">Transparansi Keuangan</a></li>
                        </ul>
                    </li>

                    <!-- 6. Dropdown Potensi Desa (Diubah Menjadi Dropdown Folder Terpisah) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link lh-sm dropdown-toggle" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#" id="navbarPotensi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Potensi
                        </a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarPotensi">
                            <li><a class="dropdown-item text-capitalize py-2" href="../potensi_down/potensi_ekonomi.php">Potensi Ekonomi & SDA</a></li>
                        </ul>
                    </li>

                    <!-- 7. Dropdown Pemerintahan -->
                    <li class="nav-item dropdown">
                        <a class="nav-link lh-sm dropdown-toggle" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#" id="navbarPemdes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pemerintah
                        </a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarPemdes">
                            <li><a class="dropdown-item text-capitalize py-2" href="../pemerintah_down/aparatur_desa.php">Aparatur Desa</a></li>
                            <li><a class="dropdown-item text-capitalize py-2" href="../pemerintah_down/lembaga.php">Lembaga Desa (BPD/PKK/LPMD)</a></li>
                        </ul>
                    </li>

                    <!-- 8. Kontak -->
                    <li class="nav-item">
                        <a class="nav-link lh-sm" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="../index.php#Hubungi Kami">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="page-header text-center">
        <div class="container">
            <h1 class="text-uppercase fw-bold mb-2" style="color: #ffc800;">Sarana & Prasarana Desa</h1>
            <p class="lead mb-0 text-muted small">Inventarisasi Fasilitas Publik, Pendidikan, Kesehatan, dan Sarana Umum Resmi</p>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            
            <!-- 1. Prasarana Pendidikan -->
            <div class="col-md-6 mb-4">
                <div class="card facility-card shadow-sm p-4 bg-white h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-circle rounded-circle me-3 mb-0"><i class="fas fa-graduation-cap"></i></div>
                        <h4 class="fw-bold text-dark text-uppercase mb-0" style="font-size: 1.2rem;">Fasilitas Pendidikan</h4>
                    </div>
                    <p class="text-muted small mb-4">Kualitas SDM desa didukung oleh ketersediaan akses tempat pendidikan yang dekat dengan pemukiman warga. Berikut rincian unitnya:</p>
                    <table class="table table-sm table-striped small mb-0">
                        <tbody>
                            <tr><td>Gedung TK / PAUD</td><td class="text-end fw-bold text-dark">6 Unit</td></tr>
                            <tr><td>Gedung SD / MI</td><td class="text-end fw-bold text-dark">6 Unit</td></tr>
                            <tr><td>Gedung SMP / MTs</td><td class="text-end fw-bold text-dark">3 Unit</td></tr>
                            <tr><td>Gedung SMA / SMK / MA</td><td class="text-end fw-bold text-dark">1 Unit</td></tr>
                            <tr><td>TPA / TPQ</td><td class="text-end fw-bold text-dark">9 Unit</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 2. Prasarana Kesehatan -->
            <div class="col-md-6 mb-4">
                <div class="card facility-card shadow-sm p-4 bg-white h-100" style="border-top-color: #ffc800;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-circle rounded-circle me-3 mb-0" style="color: #ffc800;"><i class="fas fa-heartbeat"></i></div>
                        <h4 class="fw-bold text-dark text-uppercase mb-0" style="font-size: 1.2rem;">Fasilitas Kesehatan</h4>
                    </div>
                    <p class="text-muted small mb-4">Pelayanan kesehatan dasar kemasyarakatan di tingkat dusun dilayani secara berkala melalui unit prasarana berikut:</p>
                    <table class="table table-sm table-striped small mb-0">
                        <tbody>
                            <tr><td>Posyandu Balita / Lansia</td><td class="text-end fw-bold text-dark">6 Unit</td></tr>
                            <tr><td>Poliklinik Desa (Polindes)</td><td class="text-end fw-bold text-dark">1 Unit</td></tr>
                            <tr><td>Tenaga Medis (Bidan Desa)</td><td class="text-end fw-bold text-dark">1 Orang</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 3. Prasarana Umum & Sosial -->
            <div class="col-md-12 mb-4">
                <div class="card facility-card shadow-sm p-4 p-md-5 bg-white" style="border-top-color: #343a40;">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle rounded-circle me-3 mb-0" style="color: #343a40;"><i class="fas fa-building"></i></div>
                        <h4 class="fw-bold text-dark text-uppercase mb-0" style="font-size: 1.3rem;">Fasilitas Umum & Ruang Publik</h4>
                    </div>
                    
                    <div class="row text-center">
                        <!-- Tempat Ibadah -->
                        <div class="col-md-4 mb-3">
                            <div class="p-3 bg-light rounded shadow-sm border-bottom border-secondary border-3">
                                <i class="fas fa-mosque mb-2 text-secondary fs-3"></i>
                                <h6 class="text-uppercase text-muted small fw-bold mb-1">Tempat Ibadah</h6>
                                <span class="fs-4 fw-bold text-dark">58 Unit</span>
                            </div>
                        </div>
                        <!-- Lapangan Olahraga -->
                        <div class="col-md-4 mb-3">
                            <div class="p-3 bg-light rounded shadow-sm border-bottom border-secondary border-3">
                                <i class="fas fa-running mb-2 text-secondary fs-3"></i>
                                <h6 class="text-uppercase text-muted small fw-bold mb-1">Lapangan Olahraga</h6>
                                <span class="fs-4 fw-bold text-dark">17 Unit</span>
                            </div>
                        </div>
                        <!-- Sarana Wisata -->
                        <div class="col-md-4 mb-3">
                            <div class="p-3 bg-light rounded shadow-sm border-bottom border-secondary border-3">
                                <i class="fas fa-campground mb-2 text-secondary fs-3"></i>
                                <h6 class="text-uppercase text-muted small fw-bold mb-1">Sarana Wisata</h6>
                                <span class="fs-4 fw-bold text-dark">1 Unit</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 text-muted small" style="line-height: 1.7;">
                        <p class="mb-0">Pengelolaan prasarana fisik ini melibatkan partisipasi aktif terbuka dari swadaya masyarakat, agar proses pembangunan program berjalan berkesinambungan dan mandiri demi peningkatan kesejahteraan bersama.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="footer py-4 bg-white border-top">
        <div class="container text-center text-muted small">
            Copyright &copy; Pemerintah Desa Baosan Lor 2026
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>