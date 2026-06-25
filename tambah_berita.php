<?php
session_start();
// Jika tidak ada session login aktif, tendang kembali ke halaman login.php
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
// ... sisa kode di bawahnya tetap ...

// Proses ketika tombol simpan diklik
if (isset($_POST['submit'])) {
    $judul   = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $tanggal = $_POST['tanggal'];
    $isi     = mysqli_real_escape_string($koneksi, $_POST['isi']);
    
    // Proses Upload Gambar
    $gambar    = $_FILES['gambar']['name'];
    $file_tmp  = $_FILES['gambar']['tmp_name'];
    
    // Beri nama acak agar file tidak bentrok di server
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    
    if($gambar != "") {
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            $nama_gambar_baru = bin2hex(random_bytes(10)) . '.' . $ekstensi;
            move_uploaded_file($file_tmp, 'assets/img/news/' . $nama_gambar_baru);
            
            $query = "INSERT INTO berita (judul, tanggal, isi, gambar) VALUES ('$judul', '$tanggal', '$isi', '$nama_gambar_baru')";
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg, atau png!');</script>";
        }
    } else {
        // Jika tidak upload gambar, pakai gambar default
        $query = "INSERT INTO berita (judul, tanggal, isi, gambar) VALUES ('$judul', '$tanggal', '$isi', 'default.jpg')";
    }
    
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        echo "<script>alert('Berita Berhasil Ditambahkan!'); wwindow.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan berita: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin - Tambah Berita Desa Baosan Lor</title>
    <!-- Google fonts (Sama dengan tema utama) -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (Bootstrap bawaan template) -->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        .admin-header {
            background-color: #212529; /* Warna gelap matching dengan Navbar/Footer utama */
            color: #fff;
            padding: 3rem 0;
            margin-bottom: 3rem;
        }
        .btn-primary {
            background-color: #ffc800; /* Warna kuning emas khas template Agency */
            border-color: #ffc800;
            color: #212529;
            font-weight: 700;
        }
        .btn-primary:hover {
            background-color: #d9aa00;
            border-color: #d9aa00;
            color: #212529;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>

    <!-- Header Tema Admin -->
    <header class="admin-header text-center">
        <div class="container">
            <h1 class="text-uppercase fw-bold" style="color: #ffc800;">Panel Admin</h1>
            <p class="lead mb-0 text-muted">Manajemen Transparansi Informasi Desa Baosan Lor</p>
        </div>
    </header>

    <!-- Form Input Content -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm p-4 p-md-5 bg-white">
                    <h3 class="mb-4 text-center fw-bold text-uppercase" style="color: #212529;">Tambah Berita / Kegiatan Baru</h3>
                    <hr class="mb-4">
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                        <!-- Judul Berita -->
                        <div class="mb-4">
                            <label for="judul" class="form-label fw-bold text-uppercase small">Judul Berita / Kegiatan</label>
                            <input type="text" class="form-control form-control-lg text-muted" id="judul" name="judul" placeholder="Contoh: Pelaksanaan Kegiatan Posyandu Dusun..." required />
                        </div>

                        <!-- Tanggal Kegiatan -->
                        <div class="mb-4">
                            <label for="tanggal" class="form-label fw-bold text-uppercase small">Tanggal Pelaksanaan</label>
                            <input type="date" class="form-control form-control-lg text-muted" id="tanggal" name="tanggal" required />
                        </div>

                        <!-- Isi Berita -->
                        <div class="mb-4">
                            <label for="isi" class="form-label fw-bold text-uppercase small">Isi atau Narasi Berita</label>
                            <textarea class="form-control text-muted" id="isi" name="isi" rows="8" placeholder="Tuliskan detail rangkuman kegiatan desa disini..." required></textarea>
                        </div>

                        <!-- Upload Dokumentasi Foto -->
                        <div class="mb-4">
                            <label for="gambar" class="form-label fw-bold text-uppercase small">Foto Pendukung (Format: JPG/PNG)</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" />
                            <div class="form-text text-muted">Abaikan jika ingin memakai gambar default sistem.</div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                            <a href="dashboard.php" class="btn btn-light btn-lg px-4 me-md-2 text-uppercase fw-bold small">Batal</a>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg px-5 text-uppercase">Simpan Berita</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>