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
                Selamat datang di aplikasi kami. Kami adalah tim yang berdedikasi bekerja sama 
                untuk memberikan layanan terbaik dan solusi inovatif bagi klien kami. Tujuan kami adalah 
                menghadirkan produk berkualitas tinggi yang melampaui ekspektasi.
            </p>
            <p class="mb-0">
                Kami percaya pada perbaikan berkelanjutan, kolaborasi, dan keunggulan dalam segala hal yang kami lakukan.
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
                        <h6>John Doe</h6>
                        <span class="badge bg-primary mb-2">Manajer Proyek</span>
                        <p class="text-muted small mb-0">
                            Memimpin perencanaan proyek dan koordinasi tim untuk memastikan keberhasilan delivery.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-success"></i>
                        </div>
                        <h6>Jane Smith</h6>
                        <span class="badge bg-success mb-2">Lead Developer</span>
                        <p class="text-muted small mb-0">
                            Mengawasi proses pengembangan dan memastikan kualitas kode serta best practices.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-warning"></i>
                        </div>
                        <h6>Emily Johnson</h6>
                        <span class="badge bg-warning mb-2">UI/UX Designer</span>
                        <p class="text-muted small mb-0">
                            Menciptakan antarmuka pengguna yang intuitif dan meningkatkan desain pengalaman pengguna.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-info"></i>
                        </div>
                        <h6>Michael Brown</h6>
                        <span class="badge bg-info mb-2">Database Admin</span>
                        <p class="text-muted small mb-0">
                            Mengelola sistem database dan memastikan integritas data serta performa.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3 d-flex justify-content-center"></div>
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-circle display-4 text-danger"></i>
                        </div>
                        <h6>Sarah Wilson</h6>
                        <span class="badge bg-danger mb-2">Quality Assurance</span>
                        <p class="text-muted small mb-0">
                            Bertanggung jawab untuk testing aplikasi dan memastikan kualitas produk sebelum release.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

<?php
$this->endSection();
?>