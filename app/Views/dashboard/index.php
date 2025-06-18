<?php
$this->extend('templates/header');

$this->section('content');
?>

<div class="container py-4">
    <!-- Header -->
    <div class="mb-4">
        <h2>Dashboard</h2>
        <p class="text-muted">Selamat datang di panel admin</p>
    </div>

    <!-- Stats -->
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="mb-1"><?= isset($totalUsers) ? $totalUsers : 0 ?></h3>
                    <p class="text-muted mb-0">Total Pengguna</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="mb-1"><?= isset($totalProducts) ? $totalProducts : 0 ?></h3>
                    <p class="text-muted mb-0">Total Produk</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Management -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kelola Pengguna</h5>
                    <p class="card-text text-muted">Kelola akun pengguna dan hak akses</p>
                    <a href="<?= base_url('users') ?>" class="btn btn-primary">Lihat Pengguna</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kelola Produk</h5>
                    <p class="card-text text-muted">Tambah dan kelola produk</p>
                    <a href="<?= base_url('products') ?>" class="btn btn-success">Lihat Produk</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Data -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Pengguna Terbaru</h6>
                </div>
                <div class="card-body">
                    <?php if (isset($recentUsers) && !empty($recentUsers)): ?>
                        <div class="list-group list-group-flush">
                            <?php foreach ($recentUsers as $user): ?>
                                <div class="list-group-item px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span><?= esc($user['username'] ?? 'Unknown') ?></span>
                                        <small class="text-muted">
                                            <?= isset($user['created_at']) ? date('d M', strtotime($user['created_at'])) : 'N/A' ?>
                                        </small>
                                    </div>
                                    <small class="text-muted"><?= esc($user['email'] ?? '') ?></small>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-4">
                            <i class="bi bi-person-x display-4 text-muted"></i>
                            <p class="text-muted mb-0 mt-2">Tidak ada pengguna terbaru</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Produk Terbaru</h6>
                </div>
                <div class="card-body">
                    <?php if (isset($recentProducts) && !empty($recentProducts)): ?>
                        <div class="list-group list-group-flush">
                            <?php foreach ($recentProducts as $product): ?>
                                <div class="list-group-item px-0 py-2">
                                    <div class="d-flex justify-content-between">
                                        <span><?= esc($product['name'] ?? 'Unknown Product') ?></span>
                                        <small class="text-muted">
                                            <?= isset($product['created_at']) ? date('d M', strtotime($product['created_at'])) : 'N/A' ?>
                                        </small>
                                    </div>
                                    <?php if (isset($product['price'])): ?>
                                        <small class="text-muted">Rp <?= number_format($product['price'], 0, ',', '.') ?></small>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-4">
                            <i class="bi bi-box-seam display-4 text-muted"></i>
                            <p class="text-muted mb-0 mt-2">Tidak ada produk terbaru</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card mt-4">
        <div class="card-header">
            <h6 class="mb-0">Aksi Cepat</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <a href="<?= base_url('users/create') ?>" class="btn btn-outline-primary w-100">
                        <i class="bi bi-person-plus me-1"></i>
                        Tambah Pengguna Baru
                    </a>
                </div>
                <div class="col-md-6 mb-2">
                    <a href="<?= base_url('products/create') ?>" class="btn btn-outline-success w-100">
                        <i class="bi bi-plus-circle me-1"></i>
                        Tambah Produk Baru
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>