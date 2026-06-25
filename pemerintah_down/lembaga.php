<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Lembaga Desa - Desa Baosan Lor</title>
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
        .nav-tabs .nav-link {
            color: #495057;
            font-weight: 700;
            font-size: 0.8rem;
        }
        .nav-tabs .nav-link.active {
            color: #1abc9c !important;
            border-bottom: 3px solid #1abc9c !important;
        }
        .table-responsive-custom {
            max-height: 400px;
            overflow-y: auto;
        }
        .table-responsive-custom thead {
            position: sticky;
            top: 0;
            z-index: 2;
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
            <h1 class="text-uppercase fw-bold mb-2" style="color: #ffc800;">Lembaga Kemasyarakatan</h1>
            <p class="lead mb-0 text-muted small">Mitra Strategis Pemerintah dalam Pemberdayaan Masyarakat Desa Baosan Lor</p>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-sm border-0 p-4 p-md-5 bg-white">
                    
                    <!-- REVISI: Sistem Nav Tabs Diperluas Menjadi 5 Kategori Lembaga -->
                    <ul class="nav nav-tabs text-uppercase mb-4" id="lembagaTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="bpd-tab" data-bs-toggle="tab" data-bs-target="#bpd" type="button" role="tab">BPD</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pkk-tab" data-bs-toggle="tab" data-bs-target="#pkk" type="button" role="tab">TP-PKK</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="lpmd-tab" data-bs-toggle="tab" data-bs-target="#lpmd" type="button" role="tab">LPMD</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="kartar-tab" data-bs-toggle="tab" data-bs-target="#kartar" type="button" role="tab">Karang Taruna</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="kpmd-tab" data-bs-toggle="tab" data-bs-target="#kpmd" type="button" role="tab">KPMD</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="lembagaTabContent">
                        
                        <!-- TAB 1: BPD -->
                        <div class="tab-pane fade show active" id="bpd" role="tabpanel">
                            <div class="mb-4">
                                <h5 class="fw-bold text-dark text-uppercase">Badan Permusyawaratan Desa (BPD)</h5>
                                <p class="text-muted small">Lembaga perwujudan demokrasi desa yang berfungsi mengawal aspirasi masyarakat dan menetapkan regulasi Perdes bersama Kepala Desa.</p>
                            </div>
                            <div class="table-responsive table-responsive-custom">
                                <table class="table table-striped table-hover align-middle small">
                                    <thead class="table-dark text-uppercase">
                                        <tr><th style="width: 15%;">No</th><th style="width: 50%;">Nama Pengurus</th><th style="width: 35%;">Jabatan</th></tr>
                                    </thead>
                                    <tbody class="text-secondary">
                                        <tr><td>1</td><td class="fw-bold text-dark">DAMAS</td><td>Ketua</td></tr>
                                        <tr><td>2</td><td class="fw-bold text-dark">SUYOTO</td><td>Wakil Ketua</td></tr>
                                        <tr><td>3</td><td class="fw-bold text-dark">IRVAN NUR PRAYOGA, SE</td><td>Sekretaris</td></tr>
                                        <tr><td>4</td><td class="fw-bold text-dark">TINA NGESTI HANDAYANI</td><td>Anggota</td></tr>
                                        <tr><td>5</td><td class="fw-bold text-dark">PARWOTO</td><td>Anggota</td></tr>
                                        <tr><td>6</td><td class="fw-bold text-dark">KUSNO</td><td>Anggota</td></tr>
                                        <tr><td>7</td><td class="fw-bold text-dark">ITA NURHAINI, S.Pd.I</td><td>Anggota</td></tr>
                                        <tr><td>8</td><td class="fw-bold text-dark">EKO SUJARWOTO</td><td>Anggota</td></tr>
                                        <tr><td>9</td><td class="fw-bold text-dark">HERI SUTRISNO</td><td>Anggota</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TAB 2: PKK -->
                        <div class="tab-pane fade" id="pkk" role="tabpanel">
                            <div class="mb-4">
                                <h5 class="fw-bold text-dark text-uppercase">Tim Penggerak PKK</h5>
                                <p class="text-muted small">Gerakan pemberdayaan wanita wanita kreatif desa dalam membina kesejahteraan keluarga kecil di tingkat dusun.</p>
                            </div>
                            <div class="table-responsive table-responsive-custom">
                                <table class="table table-striped table-hover align-middle small">
                                    <thead class="table-dark text-uppercase">
                                        <tr><th style="width: 15%;">No</th><th style="width: 50%;">Nama Pengurus</th><th style="width: 35%;">Jabatan</th></tr>
                                    </thead>
                                    <tbody class="text-secondary">
                                        <tr><td>1</td><td class="fw-bold text-dark">SUWARTI</td><td>Ketua</td></tr>
                                        <tr><td>2</td><td class="fw-bold text-dark">NASIROH</td><td>Wakil Ketua I</td></tr>
                                        <tr><td>3</td><td class="fw-bold text-dark">SUPARNI</td><td>Wakil Ketua II</td></tr>
                                        <tr><td>4</td><td class="fw-bold text-dark">SARMINI</td><td>Wakil Ketua III</td></tr>
                                        <tr><td>5</td><td class="fw-bold text-dark">SUPARTI</td><td>Sekretaris I</td></tr>
                                        <tr><td>6</td><td class="fw-bold text-dark">SITI NGAISAH</td><td>Sekretaris II</td></tr>
                                        <tr><td>7</td><td class="fw-bold text-dark">GONES SUNARTI</td><td>Bendahara I</td></tr>
                                        <tr><td>8</td><td class="fw-bold text-dark">SRI WAHYUNI</td><td>Bendahara II</td></tr>
                                        <tr><td>9</td><td class="fw-bold text-dark">SARMIATI</td><td>Pokja I</td></tr>
                                        <tr><td>10</td><td class="fw-bold text-dark">SUMARNI</td><td>Anggota Pokja I</td></tr>
                                        <tr><td>11</td><td class="fw-bold text-dark">PARYATUN</td><td>Pokja II</td></tr>
                                        <tr><td>12</td><td class="fw-bold text-dark">PUDYAWATI</td><td>Anggota Pokja II</td></tr>
                                        <tr><td>13</td><td class="fw-bold text-dark">SUNARNI</td><td>Pokja III</td></tr>
                                        <tr><td>14</td><td class="fw-bold text-dark">DIAN RATNA FARISTA</td><td>Pokja IV</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TAB 3: LPMD (DATA BARU) -->
                        <div class="tab-pane fade" id="lpmd" role="tabpanel">
                            <div class="mb-4">
                                <h5 class="fw-bold text-dark text-uppercase">LPMD (Lembaga Pemberdayaan Masyarakat Desa)</h5>
                                <p class="text-muted small">Wadah kemitraan strategis pemerintah desa dalam menyusun rencana pembangunan secara partisipatif.</p>
                            </div>
                            <div class="table-responsive table-responsive-custom">
                                <table class="table table-striped table-hover align-middle small">
                                    <thead class="table-dark text-uppercase">
                                        <tr><th style="width: 15%;">No</th><th style="width: 50%;">Nama Pengurus</th><th style="width: 35%;">Jabatan</th></tr>
                                    </thead>
                                    <tbody class="text-secondary">
                                        <tr><td>1</td><td class="fw-bold text-dark">SUCIPTO, S.Sos</td><td>Ketua</td></tr>
                                        <tr><td>2</td><td class="fw-bold text-dark">TULASNO</td><td>Wakil Ketua</td></tr>
                                        <tr><td>3</td><td class="fw-bold text-dark">KABUL MUJIANTO, S.Pd, M.Pd</td><td>Sekretaris</td></tr>
                                        <tr><td>4</td><td class="fw-bold text-dark">NURI DAMANTO</td><td>Bendahara</td></tr>
                                        <tr><td>5</td><td class="fw-bold text-dark">HADI SUYITNO</td><td>Anggota</td></tr>
                                        <tr><td>6</td><td class="fw-bold text-dark">SARKUN UTOMO</td><td>Anggota</td></tr>
                                        <tr><td>7</td><td class="fw-bold text-dark">KADIRAN</td><td>Anggota</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TAB 4: KARANG TARUNA (DATA BARU) -->
                        <div class="tab-pane fade" id="kartar" role="tabpanel">
                            <div class="mb-4">
                                <h5 class="fw-bold text-dark text-uppercase">Karang Taruna Desa</h5>
                                <p class="text-muted small">Wadah pengembangan generasi muda desa yang bergerak di bidang kesejahteraan sosial, olahraga, dan kreativitas.</p>
                            </div>
                            <div class="table-responsive table-responsive-custom">
                                <table class="table table-striped table-hover align-middle small">
                                    <thead class="table-dark text-uppercase">
                                        <tr><th style="width: 15%;">No</th><th style="width: 50%;">Nama Pengurus</th><th style="width: 35%;">Jabatan</th></tr>
                                    </thead>
                                    <tbody class="text-secondary">
                                        <tr><td>1</td><td class="fw-bold text-dark">DWI SUSANTO, S.IP.</td><td>Ketua</td></tr>
                                        <tr><td>2</td><td class="fw-bold text-dark">KUSNO</td><td>Wakil Ketua</td></tr>
                                        <tr><td>3</td><td class="fw-bold text-dark">MUA'LIMIN SIROJUL IMDAD</td><td>Sekretaris</td></tr>
                                        <tr><td>4</td><td class="fw-bold text-dark">GIGIH YUDHO PRASETYO</td><td>Bendahara</td></tr>
                                        <tr><td>5</td><td class="fw-bold text-dark">NUR KHOSIN</td><td>Anggota</td></tr>
                                        <tr><td>6</td><td class="fw-bold text-dark">RIBUT CAHYO PRASETYO</td><td>Anggota</td></tr>
                                        <tr><td>7</td><td class="fw-bold text-dark">ANGGUN FITRIA</td><td>Anggota</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TAB 5: KPMD (DATA BARU) -->
                        <div class="tab-pane fade" id="kpmd" role="tabpanel">
                            <div class="mb-4">
                                <h5 class="fw-bold text-dark text-uppercase">KPMD (Kader Pemberdayaan Masyarakat Desa)</h5>
                                <p class="text-muted small">Wadah penyiapan kader masyarakat desa untuk mengelola program pembangunan secara mandiri.</p>
                            </div>
                            <div class="table-responsive table-responsive-custom">
                                <table class="table table-striped table-hover align-middle small">
                                    <thead class="table-dark text-uppercase">
                                        <tr><th style="width: 15%;">No</th><th style="width: 50%;">Nama Pengurus</th><th style="width: 35%;">Jabatan</th></tr>
                                    </thead>
                                    <tbody class="text-secondary">
                                        <tr><td>1</td><td class="fw-bold text-dark">DASIMIN</td><td>Ketua</td></tr>
                                        <tr><td>2</td><td class="fw-bold text-dark">DWI SUSANTO</td><td>Sekretaris</td></tr>
                                        <tr><td>3</td><td class="fw-bold text-dark">SUCIPTO</td><td>Bendahara</td></tr>
                                        <tr><td>4</td><td class="fw-bold text-dark">SUWITO</td><td>Anggota</td></tr>
                                        <tr><td>5</td><td class="fw-bold text-dark">IKA YURIHARTI</td><td>Anggota</td></tr>
                                    </tbody>
                                </table>
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