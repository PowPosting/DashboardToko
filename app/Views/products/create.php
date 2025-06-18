<?php
$this->extend('templates/header');

$this->section('content');
?>

<div class="container py-4">
    <!-- Header -->
    <div class="mb-4">
        <h2>Tambah Produk Baru</h2>
        <p class="text-muted">Tambahkan produk baru ke inventori</p>
    </div>

    <!-- Form -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Informasi Produk</h5>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('products/store'); ?>" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="name" name="name" 
                                       placeholder="Masukkan nama produk" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label">Harga</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="price" name="price" 
                                           placeholder="0" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="stock" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stock" name="stock" 
                                       placeholder="Jumlah stok" min="0" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="category" class="form-label">Kategori</label>
                                <select class="form-select" id="category" name="category">
                                    <option value="">Pilih kategori</option>
                                    <option value="elektronik">Elektronik</option>
                                    <option value="pakaian">Pakaian</option>
                                    <option value="makanan">Makanan & Minuman</option>
                                    <option value="kesehatan">Kesehatan & Kecantikan</option>
                                    <option value="rumah">Rumah & Taman</option>
                                    <option value="olahraga">Olahraga</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" 
                                      rows="4" placeholder="Masukkan deskripsi produk" required></textarea>
                        </div>
                            <div class="col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="active">Aktif</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-between">
                            <a href="<?= site_url('products'); ?>" class="btn btn-secondary">
                                Kembali
                            </a>
                            <div>
                                <button type="reset" class="btn btn-outline-warning me-2">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-success">
                                    Simpan Produk
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->endSection();
?>