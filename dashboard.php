<?php
session_start();
// Jika tidak ada session login aktif, tendang kembali ke halaman login.php
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
// ... sisa kode di bawahnya tetap ...

// Proses Hapus Berita jika tombol hapus diklik
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    // Ambil nama gambar terlebih dahulu untuk dihapus dari server
    $cari_gambar = mysqli_query($koneksi, "SELECT gambar FROM berita WHERE id = '$id'");
    $data_gambar = mysqli_fetch_assoc($cari_gambar);
    
    // Jika gambarnya ada dan bukan gambar default, hapus filenya
    if ($data_gambar && $data_gambar['gambar'] != 'default.jpg') {
        $path = 'assets/img/news/' . $data_gambar['gambar'];
        if (file_exists($path)) {
            unlink($path);
        }
    }
    
    // Hapus data dari database
    $hapus = mysqli_query($koneksi, "DELETE FROM berita WHERE id = '$id'");
    if ($hapus) {
        echo "<script>alert('Berita berhasil dihapus!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus berita.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard Admin - Desa Baosan Lor</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Montserrat', sans-serif;
        }
        .admin-header {
            background-color: #212529;
            color: #fff;
            padding: 2.5rem 0;
            margin-bottom: 2.5rem;
        }
        .btn-primary {
            background-color: #ffc800;
            border-color: #ffc800;
            color: #212529;
            font-weight: 700;
        }
        .btn-primary:hover {
            background-color: #d9aa00;
            border-color: #d9aa00;
            color: #212529;
        }
        .table img {
            border-radius: 4px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Header Panel Admin -->
    <header class="admin-header shadow-sm">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div>
                <h1 class="text-uppercase fw-bold mb-1" style="color: #ffc800; font-size: 1.8rem;">Panel Utama Admin</h1>
                <p class="lead mb-0 text-muted small">Manajemen Informasi Konten Desa Baosan Lor</p>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="index.php" class="btn btn-outline-light btn-sm text-uppercase fw-bold px-3 me-2">Lihat Beranda</a>
                <a href="tambah_berita.php" class="btn btn-primary btn-sm text-uppercase fw-bold px-3"><i class="fas fa-plus me-1"></i> Tulis Berita</a>
                <a href="logout.php" class="btn btn-danger btn-sm text-uppercase fw-bold px-3" onclick="return confirm('Yakin ingin keluar?')">Keluar</a>
            </div>
        </div>
    </header>

    <!-- Konten Tabel Utama -->
    <div class="container mb-5">
        <div class="card shadow-sm border-0 bg-white p-4">
            <h4 class="fw-bold mb-4 text-dark text-uppercase" style="border-left: 4px solid #ffc800; padding-left: 10px;">
                Daftar Manajemen Berita / Kegiatan Desa
            </h4>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle bg-transparent">
                    <thead class="table-dark text-uppercase small">
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 15%;">Foto</th>
                            <th style="width: 20%;">Tanggal</th>
                            <th style="width: 45%;">Judul Berita</th>
                            <th style="width: 15%;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-secondary">
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC, id DESC");
                        
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                $tanggal_id = date('d-m-Y', strtotime($row['tanggal']));
                        ?>
                            <tr>
                                <td class="fw-bold"><?php echo $no++; ?></td>
                                <td>
                                    <img src="assets/img/news/<?php echo $row['gambar']; ?>" width="80" height="50" alt="Thumbnail" onerror="this.src='https://via.placeholder.com/80x50?text=No+Img'">
                                </td>
                                <td class="small"><?php echo $tanggal_id; ?></td>
                                <td class="fw-bold text-dark text-uppercase small"><?php echo $row['judul']; ?></td>
                                <td class="text-center">
                                    <a href="dashboard.php?aksi=hapus&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm text-uppercase px-3 fw-bold" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                        <i class="fas fa-trash-alt me-1"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php 
                            } 
                        } else { 
                        ?>
                            <tr>
                                <td colspan="5" class="text-center py-4 italic">Belum ada berita yang diinput. Silakan klik tombol "Tulis Berita".</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>