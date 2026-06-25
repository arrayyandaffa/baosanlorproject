<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Transparansi Keuangan & Aset - Desa Baosan Lor</title>
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
        .text-section {
            font-family: 'Roboto Slab', serif;
            line-height: 1.8;
            font-size: 1.05rem;
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
        .asset-box {
            border-left: 4px solid #1abc9c;
            background-color: #ffffff;
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
            <h1 class="text-uppercase fw-bold mb-2" style="color: #ffc800;">Transparansi Keuangan & Aset</h1>
            <p class="lead mb-0 text-muted small">Akuntabilitas Pengelolaan Pendapatan dan Kekayaan Milik Desa Baosan Lor</p>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <!-- Section 1: Regulasi & Sumber Pendapatan -->
                <div class="card shadow-sm border-0 p-4 p-md-5 mb-5 bg-white">
                    <h3 class="fw-bold mb-3 text-dark text-uppercase" style="border-left: 4px solid #ffc800; padding-left: 12px; font-size: 1.5rem;">
                        Sumber Pendapatan Desa
                    </h3>
                    <p class="text-muted small mb-4">Berdasarkan Ketentuan <strong>Peraturan Desa Baosan Lor Nomor 10 Tahun 2016</strong>, seluruh struktur penerimaan anggaran yang dibukukan dalam APB Desa setiap tahun anggaran bersumber dari:</p>
                    
                    <div class="text-section text-secondary small">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0 py-3">
                                <strong>1. Pendapatan Asli Desa (PADesa)</strong><br>
                                Terdiri dari hasil kekayaan desa, hasil swadaya dan partisipasi aktif masyarakat, hasil gotong royong, serta lain-lain pendapatan asli desa yang sah menurut hukum.
                            </li>
                            <li class="list-group-item px-0 py-3">
                                <strong>2. Bagi Hasil Pajak & Retribusi Daerah</strong><br>
                                Alokasi dana perimbangan minimal 10% yang bersumber dari pembagian hasil pajak daerah kabupaten serta retribusi daerah kabupaten secara proporsional.
                            </li>
                            <li class="list-group-item px-0 py-3">
                                <strong>3. Alokasi Dana Desa (ADD)</strong><br>
                                Bagian dari dana perimbangan keuangan pusat dan daerah yang diterima oleh kabupaten untuk didistribusikan secara proporsional kepada tiap pemerintahan desa.
                            </li>
                            <li class="list-group-item px-0 py-3">
                                <strong>4. Bantuan Keuangan & Hibah</strong><br>
                                Penerimaan bantuan dana segar yang disalurkan langsung melalui kas desa, bersumber dari APBN Pemerintah Pusat, Pemerintah Provinsi, APBD Pemerintah Daerah, maupun dana hibah/sumbangan pihak ketiga yang tidak mengikat.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Section 2: Inventarisasi Kekayaan Desa -->
                <div class="card shadow-sm border-0 p-4 p-md-5 bg-white">
                    <h3 class="fw-bold mb-3 text-dark text-uppercase" style="border-left: 4px solid #ffc800; padding-left: 12px; font-size: 1.5rem;">
                        Kekayaan & Aset Milik Desa
                    </h3>
                    <p class="text-muted small mb-4">Pemerintah Desa Baosan Lor berkomitmen mengelola secara mandiri seluruh aset berharga milik desa guna menunjang PADesa dan utilitas ruang publik warga. Adapun kekayaan desa tersebut terdiri dari:</p>
                    
                    <div class="row text-secondary small">
                        <!-- Aset 1 -->
                        <div class="col-md-6 mb-3">
                            <div class="p-3 shadow-sm rounded asset-box h-100">
                                <h6 class="fw-bold text-dark mb-1 text-uppercase"><i class="fas fa-map me-2 text-primary"></i> Tanah Kas Desa</h6>
                                <p class="mb-0 text-muted">Lahan atau tanah milik desa yang dikelola secara sah untuk keperluan operasional maupun disewakan sebagai kas desa.</p>
                            </div>
                        </div>
                        <!-- Aset 2 -->
                        <div class="col-md-6 mb-3">
                            <div class="p-3 shadow-sm rounded asset-box h-100" style="border-left-color: #ffc800;">
                                <h6 class="fw-bold text-dark mb-1 text-uppercase"><i class="fas fa-store me-2 text-warning"></i> Pasar Desa</h6>
                                <p class="mb-0 text-muted">Prasarana niaga lokal desa sebagai pusat transaksi jual beli hasil bumi sekaligus penopang ekonomi perdagangan mikro.</p>
                            </div>
                        </div>
                        <!-- Aset 3 -->
                        <div class="col-md-6 mb-3">
                            <div class="p-3 shadow-sm rounded asset-box h-100" style="border-left-color: #343a40;">
                                <h6 class="fw-bold text-dark mb-1 text-uppercase"><i class="fas fa-hotel me-2 text-dark"></i> Bangunan Desa</h6>
                                <p class="mb-0 text-muted">Seluruh aset gedung fisik atau bangunan administrasi publik yang berdiri secara sah di bawah pengelolaan pemerintah desa.</p>
                            </div>
                        </div>
                        <!-- Aset 4 -->
                        <div class="col-md-6 mb-3">
                            <div class="p-3 shadow-sm rounded asset-box h-100" style="border-left-color: #1abc9c;">
                                <h6 class="fw-bold text-dark mb-1 text-uppercase"><i class="fas fa-boxes me-2 text-info"></i> Lain-lain Kekayaan Milik Desa</h6>
                                <p class="mb-0 text-muted">Seluruh aset bergerak maupun inventaris peralatan penunjang kerja kedinasan aparatur yang tercatat sebagai hak milik desa.</p>
                            </div>
                        </div>
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