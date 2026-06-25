<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Desa Baosan Lor</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid px-xl-4 px-lg-3 px-md-2">

            <a class="navbar-brand d-flex align-items-center me-xl-3 me-lg-1" href="#page-top" style="text-decoration: none;">
                <img src="assets/img/logos/Lambang_Kabupaten_Ponorogo_1969.png" alt="Logo Ponorogo" style="height: 44px; width: auto; margin-right: 8px;" />
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
                            <li><a class="dropdown-item text-capitalize py-2 fw-bold text-primary" href="#Profil Desa"><i class="fas fa-eye me-1"></i> Lihat Bagan Profil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-capitalize py-2" href="profile_down/sejarah_visimisi.php">Sejarah & Visi Misi</a></li>
                            <li><a class="dropdown-item text-capitalize py-2" href="profile_down/demografis_geografis.php">Geografis & Demografi</a></li>
                        </ul>
                    </li>

                    <!-- 3. Peta Desa -->
                    <li class="nav-item">
                        <a class="nav-link lh-sm" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#geografis">Peta Desa</a>
                    </li>

                    <!-- 4. Berita -->
                    <li class="nav-item">
                        <a class="nav-link lh-sm" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#news">Berita</a>
                    </li>

                    <!-- 5. Dropdown Statistik & Layanan (Pecahan Menu Statistik Lama) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link lh-sm dropdown-toggle" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#" id="navbarStatistik" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Statistik
                        </a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarStatistik">
                            <li><a class="dropdown-item text-capitalize py-2 fw-bold text-primary" href="#statistik"><i class="fas fa-eye me-1"></i> Lihat Bagan Statistik</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-capitalize py-2" href="sarana_down/prasarana_fasilitas.php">Sarana & Prasarana</a></li>
                            <li><a class="dropdown-item text-capitalize py-2" href="keuangan_down/keuangan_aset.php">Transparansi Keuangan</a></li>
                        </ul>
                    </li>

                    <!-- 6. Dropdown Potensi Desa (Diubah Menjadi Dropdown Folder Terpisah) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link lh-sm dropdown-toggle" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#" id="navbarPotensi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Potensi
                        </a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarPotensi">
                            <li><a class="dropdown-item text-capitalize py-2 fw-bold text-primary" href="#Potensi Desa"><i class="fas fa-eye me-1"></i> Lihat Bagan Potensi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-capitalize py-2" href="potensi_down/potensi_ekonomi.php">Potensi Ekonomi & SDA</a></li>
                        </ul>
                    </li>

                    <!-- 7. Dropdown Pemerintahan -->
                    <li class="nav-item dropdown">
                        <a class="nav-link lh-sm dropdown-toggle" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#" id="navbarPemdes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pemerintah
                        </a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarPemdes">
                            <li><a class="dropdown-item text-capitalize py-2" href="pemerintah_down/aparatur_desa.php">Aparatur Desa</a></li>
                            <li><a class="dropdown-item text-capitalize py-2" href="pemerintah_down/lembaga.php">Lembaga Desa (BPD/PKK/LPMD)</a></li>
                        </ul>
                    </li>

                    <!-- 8. Kontak -->
                    <li class="nav-item">
                        <a class="nav-link lh-sm" style="padding: 0.5rem 4px !important; white-space: nowrap;" href="#Hubungi Kami">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di Website Resmi</div>
            <div class="masthead-heading text-uppercase">DESA BAOSAN LOR</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#Profil Desa">Jelajahi Desa</a>
        </div>
    </header>

    <!-- Profil Desa-->
    <section class="page-section" id="Profil Desa">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Profil Desa</h2>
                <h3 class="section-subheading text-muted">
                    Mengenal lebih dekat Desa Baosan Lor, Kecamatan Ngrayun, Kabupaten Ponorogo.
                </h3>
            </div>

            <ul class="timeline">
                <!-- Sejarah Desa -->
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="Sejarah Desa" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Sejarah Desa</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Desa Baosan Lor berawal dari kawasan hutan yang menjadi tempat
                                persembunyian para pengungsi pada masa peperangan Kerajaan Mataram.
                                Nama "Baosan" berasal dari aktivitas para pandai besi atau juru obong
                                yang menjadi mata pencaharian utama masyarakat pada masa awal
                                terbentuknya desa.
                            </p>
                        </div>
                    </div>
                </li>

                <!-- Kondisi Umum -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="Kondisi Desa" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Kondisi Desa</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Desa Baosan Lor memiliki luas wilayah sekitar 24.000 hektare
                                dengan jumlah penduduk 7.859 jiwa. Mayoritas masyarakat bekerja
                                di sektor pertanian yang menjadi tulang punggung perekonomian desa.
                            </p>
                        </div>
                    </div>
                </li>

                <!-- Geografis -->
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="Geografis Desa" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Geografis Desa</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Desa Baosan Lor berada di Kecamatan Ngrayun dan terdiri dari
                                tiga dukuh, yaitu Krajan, Ngembel, dan Galih. Wilayah desa
                                berbatasan dengan Desa Slahung di utara, Desa Ngrayun di timur,
                                Desa Baosan Kidul di selatan, dan Desa Mrayan di barat.
                            </p>
                        </div>
                    </div>
                </li>

                <!-- Pemerintahan -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="Pemerintahan Desa" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Pemerintahan Desa</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Pemerintahan Desa Baosan Lor dipimpin oleh Kepala Desa Parlan
                                bersama perangkat desa yang terdiri dari sekretaris desa,
                                kepala urusan, kepala seksi, dan kepala dusun yang melayani
                                kebutuhan masyarakat secara langsung.
                            </p>
                        </div>
                    </div>
                </li>

                <!-- Penutup -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Desa
                            <br />
                            Baosan
                            <br />
                            Lor
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Geografis & Peta Desa Terintegrasi Papan Informasi -->
    <section class="page-section bg-light" id="geografis">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">Peta & Tata Letak Geografis</h2>
                <h3 class="section-subheading text-muted">Informasi spasial resmi Desa Baosan Lor yang terintegrasi dengan Papan Informasi Desa.</h3>
            </div>

            <div class="row align-items-stretch">
                <!-- Kolom Kiri: Peta Interaktif / Google Maps -->
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="card h-100 shadow-sm border-0" style="min-height: 450px;">
                        <div class="card-body p-2">
                            <!-- Bingkai Google Maps (Ganti URL src dengan link embed resmi Kantor Desa Baosan Lor jika sudah ada) -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63200.651854305885!2d111.38074453661885!3d-8.097327884284706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e796da69c6d1639%3A0x2990621cf31757ad!2sBaosan%20Lor%2C%20Ngrayun%2C%20Ponorogo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1781948385080!5m2!1sen!2sid"
                                width="600"
                                height="450"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Legenda Papan Informasi & Data Demografi (Data Dummy) -->
                <div class="col-lg-5">
                    <div class="card h-100 shadow-sm border-0 bg-white">
                        <div class="card-body p-4 p-md-5 d-flex flex-column justify-content-between">
                            <div>
                                <h4 class="fw-bold text-uppercase mb-4 text-dark" style="border-left: 4px solid #ffc800; padding-left: 10px;">
                                    Legenda & Informasi Wilayah
                                </h4>
                                <p class="text-muted mb-4 small">
                                    Informasi batas wilayah administratif Desa Baosan Lor, Kecamatan Ngrayun, Kabupaten Ponorogo.
                                </p>

                                <!-- Batas Wilayah -->
                                <div class="mb-4">
                                    <span class="fw-bold text-uppercase small text-muted d-block mb-2">
                                        Batas-Batas Wilayah:
                                    </span>
                                    <ul class="list-group list-group-flush text-muted">
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                                            <span><i class="fas fa-arrow-up text-primary me-2"></i> Utara</span>
                                            <span class="fw-bold text-dark">Desa Slahung, Kecamatan Slahung</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                                            <span><i class="fas fa-arrow-right text-primary me-2"></i> Timur</span>
                                            <span class="fw-bold text-dark">Desa Ngrayun, Kecamatan Ngrayun</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                                            <span><i class="fas fa-arrow-down text-primary me-2"></i> Selatan</span>
                                            <span class="fw-bold text-dark">Desa Baosan Kidul, Kecamatan Ngrayun</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                                            <span><i class="fas fa-arrow-left text-primary me-2"></i> Barat</span>
                                            <span class="fw-bold text-dark">Desa Mrayan, Kecamatan Ngrayun</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Statistik Spasial Singkat -->
                                <div class="row text-center mt-4 pt-2 border-top">
                                    <div class="col-4 border-end">
                                        <h3 class="fw-bold text-dark mb-0">[3]</h3>
                                        <span class="text-muted small text-uppercase" style="font-size: 11px;">Dusun</span>
                                    </div>
                                    <div class="col-4 border-end">
                                        <h3 class="fw-bold text-dark mb-0">[16]</h3>
                                        <span class="text-muted small text-uppercase" style="font-size: 11px;">RW</span>
                                    </div>
                                    <div class="col-4">
                                        <h3 class="fw-bold text-dark mb-0">[61]</h3>
                                        <span class="text-muted small text-uppercase" style="font-size: 11px;">RT</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Keterangan Luas Lahan -->
                            <div class="mt-4 p-3 rounded-3 bg-light border-start border-warning border-3">
                                <span class="d-block small text-muted text-uppercase fw-bold">Estimasi Luas Wilayah:</span>
                                <h4 class="fw-bold text-dark mb-0">[24.000] Ha</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terbaru-->
    <section class="page-section" id="news" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Berita Terbaru</h2>
                <h3 class="section-subheading text-muted">Informasi dan kegiatan terkini di Desa Baosan Lor.</h3>
            </div>
            <div class="row">
                <?php
                // Mengambil 3 berita terbaru berdasarkan tanggal input
                $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC, id DESC LIMIT 3");

                // Memeriksa apakah sudah ada berita di database
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        // Membatasi tampilan isi berita agar tidak terlalu panjang di kartu beranda
                        $isi_potong = substr($row['isi'], 0, 150) . '...';

                        // Format tanggal Indonesia sederhana (YYYY-MM-DD -> DD-MM-YYYY)
                        $tanggal_id = date('d-m-Y', strtotime($row['tanggal']));
                ?>
                        <!-- Item Berita Dinamis -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <!-- Menampilkan gambar dari database -->
                                <img class="card-img-top" src="assets/img/news/<?php echo $row['gambar']; ?>" alt="Foto Kegiatan Desa" style="height: 220px; object-fit: cover;" onerror="this.src='https://via.placeholder.com/700x400?text=Foto+Berita'" />

                                <div class="card-body p-4">
                                    <div class="small text-muted mb-2">
                                        <i class="far fa-calendar-alt me-1"></i> <?php echo $tanggal_id; ?>
                                    </div>
                                    <h5 class="card-title text-uppercase fw-bold text-dark"><?php echo $row['judul']; ?></h5>
                                    <p class="card-text text-muted"><?php echo $isi_potong; ?></p>
                                </div>

                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <a class="btn btn-outline-primary btn-sm" href="detail_berita.php?id=<?php echo $row['id']; ?>">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <!-- Tampilan jika database masih kosong -->
                    <div class="col-12 text-center py-5">
                        <p class="text-muted italic">Belum ada berita atau kegiatan terbaru yang dipublikasikan.</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Statistik -->
    <section class="page-section bg-light" id="statistik" style="padding: 5rem 0;">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Statistik & Kondisi Desa</h2>
                <h3 class="section-subheading text-muted">Data dasar wilayah Desa Baosan Lor berdasarkan pemutakhiran profil terbaru.</h3>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x text-primary">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-map-marked-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Luas Wilayah</h4>
                    <p class="text-muted font-weight-bold" style="font-size: 1.5rem; color: #212529;">24.000 Ha</p>
                    <p class="text-muted">Didominasi dataran tinggi, kawasan hutan, dan area perkebunan yang subur.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x text-primary">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Jumlah Penduduk</h4>
                    <p class="text-muted font-weight-bold" style="font-size: 1.5rem; color: #212529;">7.859 Jiwa</p>
                    <p class="text-muted">Masyarakat agraris yang menjunjung tinggi gotong royong dan nilai budaya.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x text-primary">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-home fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Kepala Keluarga</h4>
                    <p class="text-muted font-weight-bold" style="font-size: 1.5rem; color: #212529;">2.565 KK</p>
                    <p class="text-muted">Tersebar di berbagai dukuh dengan pusat koordinasi pemerintahan yang solid.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Potensi Desa Grid-->
    <section class="page-section bg-light" id="Potensi Desa">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Potensi Desa</h2>
                <h3 class="section-subheading text-muted">Pusat informasi dan pelayanan masyarakat Desa Baosan Lor.</h3>
            </div>
            <div class="row">
                <!-- Item 1: Budidaya Janggelan -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://via.placeholder.com/700x500?text=Budidaya+Janggelan" alt="Sektor Pertanian" style="width: 100%; height: 250px; object-fit: cover;" />
                        </a>
                        <!-- Item 1: Sektor Pertanian -->
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sektor Pertanian</div>
                            <div class="portfolio-caption-subheading text-muted">Mata Pencaharian Utama Masyarakat</div>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Komoditas Porang -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://via.placeholder.com/700x500?text=Komoditas+Porang" alt="Sumber Daya Alam" style="width: 100%; height: 250px; object-fit: cover;" />
                        </a>
                        <!-- Item 2: Sumber Daya Alam -->
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sumber Daya Alam</div>
                            <div class="portfolio-caption-subheading text-muted">Potensi Lahan dan Perkebunan Desa</div>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Air Terjun Jurang Gandul -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-eye fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="https://via.placeholder.com/700x500?text=Air+Terjun+Jurang+Gandul" alt="Sarana dan Prasarana Desa" style="width: 100%; height: 250px; object-fit: cover;" />
                        </a>
                        <!-- Item 3: Sarana dan Prasarana Desa -->
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sarana & Prasarana</div>
                            <div class="portfolio-caption-subheading text-muted">Pendukung Kemajuan Desa</div>
                        </div>
                    </div>
                </div>

                <!-- Potensi Desa Modals-->
                <!-- Potensi Desa item 1 modal popup (Janggelan) -->
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <h2 class="text-uppercase">Potensi Sektor Pertanian</h2>
                                            <p class="item-intro text-muted">Penopang utama perekonomian masyarakat Desa Baosan Lor.</p>

                                            <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/700x500?text=Sektor+Pertanian" alt="Sektor Pertanian" />

                                            <p>
                                                Pertanian merupakan sektor ekonomi utama di Desa Baosan Lor. Berdasarkan data profil desa,
                                                sebagian besar penduduk bekerja sebagai petani sehingga sektor ini menjadi tulang punggung
                                                kehidupan masyarakat. Kondisi alam yang mendukung serta lahan yang luas menjadikan pertanian
                                                sebagai potensi unggulan yang terus dikembangkan untuk meningkatkan kesejahteraan warga.
                                            </p>

                                            <ul class="list-inline">
                                                <li><strong>Mata Pencaharian Dominan:</strong> Petani</li>
                                                <li><strong>Kategori:</strong> Pertanian dan Perkebunan</li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Tutup Detail
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Potensi Desa item 2 modal popup (Porang) -->
                <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <h2 class="text-uppercase">Potensi Sumber Daya Alam</h2>
                                            <p class="item-intro text-muted">Pemanfaatan lahan dan kekayaan alam desa.</p>

                                            <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/700x500?text=Sumber+Daya+Alam" alt="Sumber Daya Alam" />

                                            <p>
                                                Desa Baosan Lor memiliki sumber daya alam yang mendukung pengembangan sektor pertanian
                                                dan perkebunan. Kondisi geografis yang berada di wilayah pegunungan serta iklim yang
                                                mendukung memberikan peluang besar bagi masyarakat untuk mengembangkan berbagai komoditas
                                                pertanian sebagai sumber penghasilan dan penggerak ekonomi desa.
                                            </p>

                                            <ul class="list-inline">
                                                <li><strong>Potensi:</strong> Lahan Pertanian dan Perkebunan</li>
                                                <li><strong>Kategori:</strong> Sumber Daya Alam</li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Tutup Detail
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Potensi Desa item 3 modal popup (Air Terjun) -->
                <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <h2 class="text-uppercase">Sarana dan Prasarana Desa</h2>
                                            <p class="item-intro text-muted">Pendukung pelayanan dan kualitas hidup masyarakat.</p>

                                            <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/700x500?text=Sarana+dan+Prasarana" alt="Sarana dan Prasarana" />

                                            <p>
                                                Desa Baosan Lor didukung oleh berbagai sarana dan prasarana yang menunjang aktivitas
                                                masyarakat, mulai dari fasilitas pendidikan, kesehatan, tempat ibadah, lapangan olahraga,
                                                hingga sarana wisata. Keberadaan fasilitas tersebut menjadi modal penting dalam mendukung
                                                pembangunan desa dan meningkatkan kualitas pelayanan kepada masyarakat.
                                            </p>

                                            <ul class="list-inline">
                                                <li><strong>Fasilitas:</strong> Pendidikan, Kesehatan, Olahraga, dan Wisata</li>
                                                <li><strong>Kategori:</strong> Sarana dan Prasarana Desa</li>
                                            </ul>
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Tutup Detail
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <!-- Pemerintahan Desa -->
    <section class="page-section bg-light" id="Pemerintahan Desa">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Pemerintah Desa</h2>
                <h3 class="section-subheading text-muted">Pusat informasi dan pelayanan masyarakat Desa Baosan Lor.</h3>
            </div>
            <div class="row g-4">

                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-user-tie fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Parlan</h5>
                            <p class="text-muted mb-1">Kepala Desa</p>
                            <p class="mb-0"><i class="fas fa-phone-alt text-primary me-1"></i><small>+62 812-XXXX-XXXX</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-user fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Sungkono</h5>
                            <p class="text-muted mb-1">Sekretaris Desa</p>
                            <p class="mb-0"><i class="fas fa-phone-alt text-primary me-1"></i><small>+62 812-XXXX-XXXX</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-coins fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Siti Ngaisah, S.IP</h5>
                            <p class="text-muted mb-1">Kaur Keuangan</p>
                            <p class="mb-0"><i class="fas fa-phone-alt text-primary me-1"></i><small>+62 812-XXXX-XXXX</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-file-alt fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Hartono</h5>
                            <p class="text-muted mb-1">Kaur Perencanaan</p>
                            <p class="mb-0"><i class="fas fa-phone-alt text-primary me-1"></i><small>+62 812-XXXX-XXXX</small></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row g-4 mt-2">

                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-folder-open fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Suratno, S.IP</h5>
                            <p class="text-muted mb-1">Kaur Tata Usaha & Umum</p>
                            <p class="mb-0"><i class="fas fa-phone-alt text-primary me-1"></i><small>+62 812-XXXX-XXXX</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-hands-helping fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Dasimin</h5>
                            <p class="text-muted mb-1">Kasi Kesejahteraan</p>
                            <p class="mb-0"><i class="fas fa-phone-alt text-primary me-1"></i><small>+62 812-XXXX-XXXX</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-landmark fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Suwito</h5>
                            <p class="text-muted mb-1">Kasi Pemerintahan</p>
                            <p class="mb-0"><i class="fas fa-phone-alt text-primary me-1"></i><small>+62 812-XXXX-XXXX</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-concierge-bell fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Januri</h5>
                            <p class="text-muted mb-1">Kasi Pelayanan</p>
                            <p class="mb-0"><i class="fas fa-phone-alt text-primary me-1"></i><small>+62 812-XXXX-XXXX</small></p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tambah mt-5 untuk spacing lebih lega -->
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">
                        Pemerintah Desa Baosan Lor berkomitmen memberikan pelayanan terbaik kepada masyarakat melalui tata kelola pemerintahan yang transparan, akuntabel, dan berorientasi pada pembangunan desa yang berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Sponsors -->
    <div class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="section-heading">Didukung Oleh</h3>
                
            </div>

            <div class="row justify-content-center align-items-center">

                <div class="col-md-4 col-sm-6 my-3 text-center">
                    <a href="#!">
                        <img class="img-fluid img-brand"
                            src="assets/img/logos/DAPUR CETAK.png"
                            alt="Dapur Cetak"
                            style="max-height: 100px;">
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 my-3 text-center">
                    <img src="assets/img/logos/LOGO SEWIWI JAYA_20260623_220700_0000.png"
                        alt="Sewiwi Jaya"
                        style="max-height:180px; width:auto;">
                </div>

            </div>
        </div>
    </div>

    <!-- Hubungi Kami-->
    <section class="page-section" id="Hubungi Kami">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                <h3 class="section-subheading text-muted">
                    Informasi kontak dan lokasi Kantor Desa Baosan Lor.
                </h3>
            </div>

            <div class="row g-5">

                <!-- Informasi Kontak -->
                <div class="col-lg-5">

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Informasi Kontak</h4>

                            <div class="d-flex mb-4">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-1">Alamat</h6>
                                    <p class="text-muted mb-0">
                                        Kantor Desa Baosan Lor, Kecamatan Ngrayun,
                                        Kabupaten Ponorogo, Jawa Timur
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <i class="fas fa-phone fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-1">Telepon / WhatsApp</h6>
                                    <p class="text-muted mb-0">
                                        +62 857-3073-7617
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-1">Email</h6>
                                    <p class="text-muted mb-0">
                                        desabaosanlor@example.com
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex">
                                <i class="fas fa-clock fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-1">Jam Pelayanan</h6>
                                    <p class="text-muted mb-0">
                                        Senin - Jumat<br>
                                        08.00 - 15.00 WIB
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Maps -->
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63200.651854305885!2d111.38074453661885!3d-8.097327884284706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e796da69c6d1639%3A0x2990621cf31757ad!2sBaosan%20Lor%2C%20Ngrayun%2C%20Ponorogo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1781948385080!5m2!1sen!2sid"
                                width="600"
                                height="450"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Website Resmi Desa Baosan Lor 2026</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <!-- Link Khusus Akses Admin -->
                    <a class="link-dark text-decoration-none me-3 fw-bold" href="login.php"><i class="fas fa-user-shield me-1"></i> Admin Portal</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Potensi Desa Modals-->
    <!-- Potensi Desa item 1 modal popup (Janggelan) -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Budidaya Tanaman Janggelan</h2>
                                <p class="item-intro text-muted">Penggerak Utama Roda Ekonomi Masyarakat Baosan Lor.</p>
                                <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/700x500?text=Budidaya+Janggelan" alt="Budidaya Janggelan" />
                                <p>Desa Baosan Lor sangat dikenal dengan budidaya tanaman janggelan (cincau hitam) berkualitas tinggi. Sektor pertanian ini menjadi salah satu pilar utama pendapatan warga setempat. Wilayah desa yang subur juga dikelilingi vegetasi asri seperti pohon sengon, mahoni, cengkeh, dan pinus. Melalui sinergi bersama mahasiswa dan pemerintah daerah, warga aktif diberdayakan untuk mengolah limbah sisa hasil pertanian janggelan ini menjadi pupuk kompos organik yang bernilai tambah tinggi bagi kesuburan tanah desa.</p>
                                <ul class="list-inline">
                                    <li><strong>Komoditas Utama:</strong> Janggelan (Cincau Hitam) & Kompos Organik</li>
                                    <li><strong>Kategori:</strong> Sektor Pertanian & Perkebunan</li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Potensi Desa item 2 modal popup (Porang) -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Komoditas Porang Lokal</h2>
                                <p class="item-intro text-muted">Kebangkitan Hasil Bumi Pegunungan Ngrayun.</p>
                                <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/700x500?text=Komoditas+Porang" alt="Komoditas Porang" />
                                <p>Tanaman Porang di Desa Baosan Lor merupakan salah satu komoditas perkebunan bernilai ekspor yang sempat menjadi primadona andalan warga. Walaupun sempat mengalami dinamika keterpurukan harga pasar beberapa waktu lalu, kini para petani lokal mulai bangkit kembali untuk mengoptimalkan perawatan dan sistem niaga porang guna memulihkan stabilitas ekonomi sektor perkebunan desa.</p>
                                <ul class="list-inline">
                                    <li><strong>Wilayah Tanam:</strong> Kawasan Perkebunan Baosan Lor</li>
                                    <li><strong>Kategori:</strong> Sektor Perkebunan Unggulan</li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Potensi Desa item 3 modal popup (Air Terjun) -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Air Terjun Jurang Gandul</h2>
                                <p class="item-intro text-muted">Pesona Destinasi Wisata Alam Tersembunyi.</p>
                                <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/700x500?text=Air+Terjun+Jurang+Gandul" alt="Air Terjun Jurang Gandul" />
                                <p>Desa Baosan Lor menyimpan potensi wisata alam memukau berupa Air Terjun Jurang Gandul. Destinasi alam ini berlokasi tepatnya di lingkungan Jambe, Dukuh Ngembel. Akses menuju lokasi berjarak sekitar 1 km dari jalur raya utama Mrayan. Air terjun ini menyuguhkan panorama alam yang asri, udara sejuk khas dataran tinggi, serta formasi tebing pegunungan yang eksotis bagi para penjelajah.</p>
                                <ul class="list-inline">
                                    <li><strong>Lokasi Fisik:</strong> Lingkungan Jambe, Dukuh Ngembel (1 KM dari Jl. Raya Mrayan)</li>
                                    <li><strong>Kategori:</strong> Destinasi Potensi Wisata Alam</li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>