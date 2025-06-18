<?php
$this->extend('templates/header');

$this->section('content');
?>

<div class="container py-4">
    <!-- Header Section -->
    <div class="mb-4">
        <h2>Kelola Produk</h2>
        <p class="text-muted">Kelola inventori produk Anda</p>
    </div>

    <!-- Action Bar -->
    <div class="row mb-4">
        <div class="col-md-6">
            <a href="<?= site_url('products/create'); ?>" class="btn btn-success">
                Tambah Produk Baru
            </a>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari produk..." id="searchInput">
                <span class="input-group-text">
                    <i class="bi bi-search"></i>
                </span>
            </div>
        </div>
    </div>

    <!-- Products Table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Daftar Produk</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($products) && is_array($products)): ?>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td>
                                        <span class="badge bg-secondary"><?= esc($product['id']); ?></span>
                                    </td>
                                    <td>
                                        <strong><?= esc($product['name']); ?></strong>
                                    </td>
                                    <td>
                                        <span class="text-muted">
                                            <?= strlen($product['description']) > 50 ? substr(esc($product['description']), 0, 50) . '...' : esc($product['description']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-success">Rp <?= number_format($product['price'], 2, ',', '.'); ?></span>
                                    </td>
                                    <td>
                                        <?php 
                                        $stock = $product['stock'] ?? 0;
                                        $stockClass = $stock > 10 ? 'success' : ($stock > 0 ? 'warning' : 'danger');
                                        ?>
                                        <span class="badge bg-<?= $stockClass ?>"><?= $stock; ?></span>
                                    </td>
                                    <td>
                                        <?php 
                                        $status = $product['status'] ?? 'active';
                                        $statusClass = $status === 'active' ? 'success' : ($status === 'draft' ? 'warning' : 'secondary');
                                        $statusText = $status === 'active' ? 'active' : ($status === 'draft' ? 'Draft' : 'inactive');
                                        ?>
                                        <span class="badge bg-<?= $statusClass ?>"><?= $statusText; ?></span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="<?= site_url('products/edit/' . $product['id']); ?>" 
                                               class="btn btn-sm btn-outline-warning" 
                                               title="Edit Produk">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="<?= site_url('products/delete/' . $product['id']); ?>" 
                                               class="btn btn-sm btn-outline-danger" 
                                               title="Hapus Produk"
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    <div class="text-muted">
                                        <h5>Tidak ada produk</h5>
                                        <p>Mulai dengan menambahkan produk pertama Anda</p>
                                        <a href="<?= site_url('products/create'); ?>" class="btn btn-primary">
                                            Tambah Produk
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Search Script -->
<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
    const tableRows = document.querySelectorAll('tbody tr');
    
    tableRows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchValue) ? '' : 'none';
    });
});
</script>

<?php
$this->endSection();
?>