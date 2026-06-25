<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Potensi Ekonomi & SDA - Desa Baosan Lor</title>
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
        .icon-box {
            color: #1abc9c;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .stat-highlight {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ffc800;
            line-height: 1;
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
            <h1 class="text-uppercase fw-bold mb-2" style="color: #ffc800;">Potensi Ekonomi & SDA</h1>
            <p class="lead mb-0 text-muted small">Menggali Kekayaan Alam dan Sektor Usaha Unggulan Desa Baosan Lor</p>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container my-5">
        
        <!-- Papan Statistik Sorotan -->
        <div class="row text-center mb-5">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0 p-4 bg-white">
                    <span class="stat-highlight mb-2">5.453</span>
                    <span class="text-uppercase text-muted small fw-bold">Warga Bekerja sebagai Petani</span>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0 p-4 bg-white">
                    <span class="stat-highlight mb-2">20</span>
                    <span class="text-uppercase text-muted small fw-bold">Pengrajin Tradisional Aktif</span>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0 p-4 bg-white">
                    <span class="stat-highlight mb-2">243</span>
                    <span class="text-uppercase text-muted small fw-bold">Pelaku Sektor Perdagangan</span>
                </div>
            </div>
        </div>

        <!-- Row Konten Utama -->
        <div class="row">
            <!-- Sektor Pertanian & SDA -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm border-0 p-4 p-md-5 bg-white h-100">
                    <div class="icon-box"><i class="fas fa-seedling"></i></div>
                    <h4 class="fw-bold mb-3 text-dark text-uppercase">Sektor Pertanian Unggulan</h4>
                    <div class="text-section text-secondary small">
                        <p>Kekayaan Sumber Daya Alam yang ada di Desa Baosan Lor amat sangat mendukung, baik dari segi pengembangan ekonomi maupun sosial budaya masyarakat. Sektor pertanian memegang peranan paling vital dan menjadi fondasi utama roda perekonomian desa.</p>
                        <p>Hal ini dibuktikan dengan mayoritas mata pencaharian penduduk yang berada di sektor ini. Lingkungan alam yang subur sangat memengaruhi pola tanam musiman warga, menjadikan hasil bumi lokal sebagai komoditas utama penopang taraf hidup keluarga di pedesaan.</p>
                    </div>
                </div>
            </div>

            <!-- Sektor Jalur Strategis & Perdagangan -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm border-0 p-4 p-md-5 bg-white h-100">
                    <div class="icon-box"><i class="fas fa-route"></i></div>
                    <h4 class="fw-bold mb-3 text-dark text-uppercase">Jalur Perdagangan Strategis</h4>
                    <div class="text-section text-secondary small">
                        <p>Selain faktor kekayaan alam, Desa Baosan Lor diuntungkan oleh letak geografis wilayahnya yang cukup strategis. Desa ini berada langsung di jalur transportasi utama yang menjadi penghubung mobilitas antar-Kecamatan, yaitu melintasi <strong>Kecamatan Ngrayun dengan Kecamatan Bungkal</strong>.</p>
                        <p>Posisi sebagai jalur perlintasan ekonomi ini membuka ruang usaha yang luas bagi warga lokal. Tercatat sebanyak 243 orang berprofesi di sektor perdagangan, mendirikan warung kopi atau toko kelontong di sepanjang jalur utama guna menangkap peluang ekonomi dari para pelintas.</p>
                    </div>
                </div>
            </div>

            <!-- Program Usaha Kecil -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm border-0 p-4 p-md-5 bg-white h-100">
                    <div class="icon-box"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4 class="fw-bold mb-3 text-dark text-uppercase">Penguatan Usaha Kecil</h4>
                    <div class="text-section text-secondary small">
                        <p>Pemerintah Desa menaruh perhatian serius terhadap perluasan kesempatan kerja untuk menekan angka kemiskinan dan meminimalisir angka pengangguran kependudukan. Salah satu strategi pembangunan ekonomi desa difokuskan pada penguatan kelompok usaha kecil warga.</p>
                        <p>Langkah nyata tersebut diwujudkan dengan berupaya memfasilitasi akses permodalan berupa penyaluran kredit usaha. Dukungan finansial ini diharapkan mampu menumbuhkan iklim UMKM yang mandiri, khususnya bagi para pelaku usaha domestik di bidang perdagangan agar usahanya dapat terus berkembang.</p>
                    </div>
                </div>
            </div>

            <!-- Sektor Industri Kreatif Tradisional -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm border-0 p-4 p-md-5 bg-white h-100">
                    <div class="icon-box"><i class="fas fa-hammer"></i></div>
                    <h4 class="fw-bold mb-3 text-dark text-uppercase">Jejak Industri Pengrajin</h4>
                    <div class="text-section text-secondary small">
                        <p>Potensi ekonomi kreatif di Desa Baosan Lor memiliki akar sejarah yang sangat kuat. Berdasarkan narasi tetua desa, kawasan ini dahulu dikembangkan melalui usaha produktif kelompok masyarakat yang mahir bekerja sebagai pandai besi atau <em>juru obong</em>. Profesi bersejarah inilah yang menjadi sumber kehidupan dan melahirkan nama desa.</p>
                        <p>Hingga saat ini, jejak keterampilan manufaktur tradisional tersebut masih terjaga, di mana terdapat 20 orang warga yang konsisten bergerak di sektor industri kerajinan. Sektor ini menjadi aset budaya berharga sekaligus alternatif ekonomi potensial selain bertani.</p>
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