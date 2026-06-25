<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Aparatur Desa - Desa Baosan Lor</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
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
        .team-card {
            border: none;
            transition: transform 0.2s;
        }
        .team-card:hover {
            transform: translateY(-5px);
        }
        .avatar-placeholder {
            width: 120px;
            height: 120px;
            background-color: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto;
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

    <header class="page-header text-center">
        <div class="container">
            <h1 class="text-uppercase fw-bold mb-2" style="color: #ffc800;">Aparatur Pemerintah Desa</h1>
            <p class="lead mb-0 text-muted small">Struktur Organisasi Tata Kerja (SOTK) Resmi Desa Baosan Lor</p>
        </div>
    </header>

    <div class="container my-5">
        
        <h4 class="fw-bold mb-4 text-dark text-uppercase text-center" style="letter-spacing: 1px;">
            Pimpinan Inti Pemerintah Desa
        </h4>
        <div class="row justify-content-center mb-5">
            <div class="col-md-4 mb-4">
                <div class="card team-card shadow-sm text-center p-4 bg-white">
                    <div class="avatar-placeholder rounded-circle mb-3 shadow-sm">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h5 class="fw-bold mb-1 text-dark text-uppercase">PARLAN</h5>
                    <p class="text-primary small fw-bold text-uppercase mb-0" style="letter-spacing: 1px;">Kepala Desa</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card team-card shadow-sm text-center p-4 bg-white">
                    <div class="avatar-placeholder rounded-circle mb-3 shadow-sm">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h5 class="fw-bold mb-1 text-dark text-uppercase">SUNGKONO</h5>
                    <p class="text-primary small fw-bold text-uppercase mb-0" style="letter-spacing: 1px;">Sekretaris Desa</p>
                </div>
            </div>
        </div>

        <hr class="mb-5">

        <h4 class="fw-bold mb-4 text-dark text-uppercase text-center" style="letter-spacing: 1px;">
            Seksi (Kasi) & Urusan (Kaur)
        </h4>
        <div class="row justify-content-center mb-5">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem;">
                        <i class="fas fa-user"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">HARTONO</h6>
                    <p class="text-muted small mb-0">Kaur Perencanaan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem;">
                        <i class="fas fa-user"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">SITI NGAISAH, S.IP</h6>
                    <p class="text-muted small mb-0">Kaur Keuangan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem;">
                        <i class="fas fa-user"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">SURATNO, S.IP</h6>
                    <p class="text-muted small mb-0">Kaur Tata Usaha & Umum</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem;">
                        <i class="fas fa-user"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">SUWITO</h6>
                    <p class="text-muted small mb-0">Kasi Pemerintahan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem;">
                        <i class="fas fa-user"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">JANURI</h6>
                    <p class="text-muted small mb-0">Kasi Pelayanan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem;">
                        <i class="fas fa-user"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">DASIMIN</h6>
                    <p class="text-muted small mb-0">Kasi Kesejahteraan (Kesra)</p>
                </div>
            </div>
        </div>

        <hr class="mb-5">

        <h4 class="fw-bold mb-4 text-dark text-uppercase text-center" style="letter-spacing: 1px;">
            Kepala Dusun (Kamituwo)
        </h4>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-4 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem; border-left: 3px solid #ffc800;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">PAIRIN</h6>
                    <p class="text-muted small mb-0">Kamituwo Krajan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem; border-left: 3px solid #ffc800;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">KADIRIN</h6>
                    <p class="text-muted small mb-0">Kamituwo Ngembel</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 mb-4">
                <div class="card team-card shadow-sm text-center p-3 bg-white h-100">
                    <div class="avatar-placeholder rounded-circle mb-3" style="width: 80px; height: 80px; font-size: 1.8rem; border-left: 3px solid #ffc800;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h6 class="fw-bold text-dark text-uppercase mb-1 small">JURIANTO</h6>
                    <p class="text-muted small mb-0">Kamituwo Galih</p>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer py-4 bg-white border-top">
        <div class="container text-center text-muted small">
            Copyright &copy; Pemerintah Desa Baosan Lor 2026
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>