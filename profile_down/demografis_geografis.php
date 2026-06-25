<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Geografis & Demografi - Desa Baosan Lor</title>
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
        .badge-geo {
            background-color: #e9ecef;
            color: #495057;
            font-weight: 600;
            border-left: 3px solid #1abc9c;
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
            <h1 class="text-uppercase fw-bold mb-2" style="color: #ffc800;">Geografis & Demografi</h1>
            <p class="lead mb-0 text-muted small">Analisis Wilayah Kependudukan dan Geografis Desa Baosan Lor</p>
        </div>
    </header>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-5 mb-4">
                <div class="card shadow-sm border-0 p-4 bg-white h-100">
                    <h4 class="fw-bold mb-4 text-dark text-uppercase" style="border-left: 4px solid #ffc800; padding-left: 10px;">
                        Kondisi Geografis
                    </h4>
                    <div class="text-section text-secondary small mb-4">
                        <p>Desa Baosan Lor merupakan salah satu dari 11 desa di wilayah administrasi Kecamatan Ngrayun, Kabupaten Ponorogo. Terletak kurang lebih $6\text{ km}$ ke arah Barat dari pusat pemerintahan Kecamatan Ngrayun , desa ini memiliki bentang wilayah seluas <strong>24.000ha</strong>. Secara topografi, wilayah desa terbagi ke dalam 3 wilayah Dukuh utama:</p>
                        <ol class="ps-3 fw-bold text-dark">
                            <li>Dukuh Krajan</li>
                            <li>Dukuh Ngembel</li>
                            <li>Dukuh Galih</li>
                        </ol>
                    </div>

                    <h5 class="fw-bold text-dark text-uppercase small mb-3">Batas Wilayah Administrasi</h5>
                    <div class="p-3 badge-geo rounded mb-2 small">
                        <strong>Sebelah Utara:</strong> Desa Slahung, Kecamatan Slahung 
                    </div>
                    <div class="p-3 badge-geo rounded mb-2 small">
                        <strong>Sebelah Timur:</strong> Desa Ngrayun, Kecamatan Ngrayun 
                    </div>
                    <div class="p-3 badge-geo rounded mb-2 small">
                        <strong>Sebelah Selatan:</strong> Desa Baosan Kidul, Kecamatan Ngrayun 
                    </div>
                    <div class="p-3 badge-geo rounded mb-3 small">
                        <strong>Sebelah Barat:</strong> Desa Mrayan, Kecamatan Ngrayun 
                    </div>
                </div>
            </div>

            <div class="col-lg-7 mb-4">
                <div class="card shadow-sm border-0 p-4 bg-white">
                    <h4 class="fw-bold mb-4 text-dark text-uppercase" style="border-left: 4px solid #ffc800; padding-left: 10px;">
                        Struktur Penduduk Desa
                    </h4>
                    <p class="text-muted small">Total penduduk Desa Baosan Lor tercatat sebanyak <strong>7.859 Jiwa</strong> dengan akumulasi <strong>2.565 Kepala Keluarga (KK)</strong>.</p>

                    <ul class="nav nav-tabs text-uppercase small font-weight-bold" id="demografiTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="umur-tab" data-bs-toggle="tab" data-bs-target="#umur" type="button" role="tab">Gol. Umur</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="kerja-tab" data-bs-toggle="tab" data-bs-target="#kerja" type="button" role="tab">Pekerjaan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sekolah-tab" data-bs-toggle="tab" data-bs-target="#sekolah" type="button" role="tab">Pendidikan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sejahtera-tab" data-bs-toggle="tab" data-bs-target="#sejahtera" type="button" role="tab">Kesejahteraan</button>
                        </li>
                    </ul>

                    <div class="tab-content pt-3" id="demografiTabContent">
                        <div class="tab-pane fade show active" id="umur" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped align-middle small">
                                    <thead class="table-dark">
                                        <tr><th>Golongan Umur</th><th>Laki-Laki</th><th>Perempuan</th><th>Total</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>0 - 12 Bulan</td><td>38</td><td>37</td><td>75</td></tr>
                                        <tr><td>13 Bulan - 4 Tahun</td><td>161</td><td>226</td><td>387</td></tr>
                                        <tr><td>5 - 6 Tahun</td><td>121</td><td>105</td><td>226</td></tr>
                                        <tr><td>7 - 12 Tahun</td><td>273</td><td>245</td><td>518</td></tr>
                                        <tr><td>13 - 15 Tahun</td><td>133</td><td>102</td><td>235</td></tr>
                                        <tr><td>16 - 18 Tahun</td><td>91</td><td>121</td><td>212</td></tr>
                                        <tr><td>19 - 25 Tahun</td><td>354</td><td>403</td><td>757</td></tr>
                                        <tr><td>26 - 35 Tahun</td><td>484</td><td>531</td><td>1.015</td></tr>
                                        <tr><td>36 - 45 Tahun</td><td>627</td><td>527</td><td>1.154</td></tr>
                                        <tr><td>46 - 50 Tahun</td><td>312</td><td>311</td><td>623</td></tr>
                                        <tr><td>51 - 60 Tahun</td><td>1.407</td><td>1.347</td><td>2.754</td></tr>
                                        <tr class="table-warning fw-bold"><td>JUMLAH TOTAL</td><td>4.001</td><td>3.858</td><td>7.859</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kerja" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped align-middle small">
                                    <thead class="table-dark">
                                        <tr><th>No</th><th>Mata Pencaharian</th><th>Jumlah (Orang)</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td><strong>Petani</strong></td><td>5.453</td></tr>
                                        <tr><td>2</td><td>Pedagang</td><td>243</td></tr>
                                        <tr><td>3</td><td>Pegawai Negeri (PNS)</td><td>52</td></tr>
                                        <tr><td>4</td><td>Pengrajin</td><td>20</td></tr>
                                        <tr><td>5</td><td>Pensiunan</td><td>15</td></tr>
                                        <tr><td>6</td><td>Peternak</td><td>2</td></tr>
                                        <tr><td>7</td><td>Sektor Lain-lain</td><td>1.883</td></tr>
                                        <tr class="table-warning fw-bold"><td colspan="2">JUMLAH</td><td>7.859</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="sekolah" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped align-middle small">
                                    <thead class="table-dark">
                                        <tr><th>No</th><th>Tingkat Pendidikan</th><th>Jumlah Penduduk</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>Belum / Tidak / Sudah Tidak Sekolah</td><td>2.210</td></tr>
                                        <tr><td>2</td><td>Sekolah Dasar (SD)</td><td>2.916</td></tr>
                                        <tr><td>3</td><td>SLTP / Sederajat</td><td>1.296</td></tr>
                                        <tr><td>4</td><td>SLTA / SMK / Sederajat</td><td>1.181</td></tr>
                                        <tr><td>5</td><td>Perguruan Tinggi (Sarjana)</td><td>256</td></tr>
                                        <tr class="table-warning fw-bold"><td colspan="2">JUMLAH</td><td>7.859</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="sejahtera" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped align-middle small">
                                    <thead class="table-dark">
                                        <tr><th>No</th><th>Tingkat Kesejahteraan Ekonomi</th><th>Jumlah Kepala Keluarga</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>1</td><td>Keluarga Miskin / Kurang Mampu</td><td>6.164</td></tr>
                                        <tr><td>2</td><td>Keluarga Sedang / Menengah</td><td>450</td></tr>
                                        <tr><td>3</td><td>Keluarga Sejahtera / Kaya</td><td>102</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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