<?php
$this->extend('templates/header');

$this->section('content');
?>

<div class="container py-4">
    <!-- Header Section -->
    <div class="mb-4">
        <h2>Tentang Kami</h2>
        <p class="text-muted">Pelajari lebih lanjut tentang tim dan misi kami</p>
    </div>

    <!-- Mission Section -->
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">Misi Kami</h4>
            <p class="text-muted">
                Kami adalah tim mahasiswa yang mengembangkan aplikasi inventori toko berbasis web menggunakan CodeIgniter 4 dan REST API. Aplikasi ini dirancang untuk membantu toko dalam mengelola stok barang, transaksi, dan laporan dengan lebih efisien.
            </p>
            <p class="mb-0">
                Kami berkomitmen untuk menghadirkan aplikasi yang andal, aman, dan terintegrasi, sehingga pemilik toko dapat mengambil keputusan bisnis yang tepat berdasarkan data real-time. Dengan fitur-fitur yang lengkap dan dukungan teknis profesional, kami ingin menjadi mitra terpercaya dalam mendukung pertumbuhan dan kesuksesan bisnis Anda.
            </p>
        </div>
    </div>

    <!-- Team Section -->
    <div class="card mb-4">
        <div class="card-header">
            <h4 class="mb-0">Tim Kami</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-primary"></i>
                        </div>
                        <h6>Mukhamad Diva M.A</h6>
                        <span class="badge bg-primary mb-2">Backend Developer</span>
                        <p class="text-muted small mb-0">
                            Bertanggung jawab atas pengelolaan proyek, perancangan REST API, dan pembuatan fitur backend seperti login, manajemen user, dan manajemen produk.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-success"></i>
                        </div>
                        <h6>Revanda Agastar Wijaya</h6>
                        <span class="badge bg-success mb-2">Frontend Developer</span>
                        <p class="text-muted small mb-0">
                            Mengembangkan tampilan antarmuka pengguna (UI) dan mengintegrasikannya dengan API backend.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-warning"></i>
                        </div>
                        <h6>Mutiara Novitasari</h6>
                        <span class="badge bg-warning mb-2">Database Administrator</span>
                        <p class="text-muted small mb-0">
                            Menciptakan dan mengelola struktur database, serta memastikan keamanan dan integritas data.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-info"></i>
                        </div>
                        <h6>Nirmala Putri</h6>
                        <span class="badge bg-info mb-2">Quality Assurance</span>
                        <p class="text-muted small mb-0">
                            Melakukan pengujian fungsionalitas aplikasi, memastikan semua fitur berjalan sesuai kebutuhan, serta melaporkan bug.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3 d-flex justify-content-center"></div>
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-danger"></i>
                        </div>
                        <h6>Firdaus Gozali</h6>
                        <span class="badge bg-danger mb-2">Dokumentasi & Deployment</span>
                        <p class="text-muted small mb-0">
                            Membuat dokumentasi teknis dan user guide, serta menangani proses deployment aplikasi ke server lokal maupun hosting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

<?php
$this->endSection();
?>