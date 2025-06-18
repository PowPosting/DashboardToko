<?php
$this->extend('templates/header');

$this->section('content');
?>

<div class="container py-4">
    <!-- Header Section -->
    <div class="mb-4">
        <h2>Kelola Pengguna</h2>
        <p class="text-muted">Kelola akun pengguna dan hak akses</p>
    </div>

    <!-- Action Bar -->
    <div class="row mb-4">
        <div class="col-md-6">
            <a href="<?= base_url('users/create'); ?>" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i>
                Tambah Pengguna Baru
            </a>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari pengguna..." id="searchInput">
                <span class="input-group-text">
                    <i class="bi bi-search"></i>
                </span>
            </div>
        </div>
    </div>

    <!-- Users Table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Daftar Pengguna</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Peran</th>
                            <th>Tgl Dibuat</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($users) && is_array($users)): ?>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td>
                                        <span class="badge bg-secondary"><?= esc($user['id']); ?></span>
                                    </td>
                                    <td>
                                        <strong><?= esc($user['username']); ?></strong>
                                    </td>
                                    <td>
                                        <span class="text-muted"><?= esc($user['full_name'] ?? 'Tidak diisi'); ?></span>
                                    </td>
                                    <td>
                                        <a href="mailto:<?= esc($user['email']); ?>" class="text-decoration-none">
                                            <?= esc($user['email']); ?>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger">Admin</span>
                                    </td>
                                    
                                    <td>
                                        <small class="text-muted">
                                            <?= isset($user['created_at']) ? date('d M Y', strtotime($user['created_at'])) : 'N/A' ?>
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="<?= base_url('users/edit/' . $user['id']); ?>" 
                                               class="btn btn-sm btn-outline-warning" 
                                               title="Edit Pengguna">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="button" 
                                                    class="btn btn-sm btn-outline-danger" 
                                                    title="Hapus Pengguna"
                                                    onclick="confirmDelete(<?= $user['id']; ?>, '<?= esc($user['username']); ?>')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <div class="text-muted">
                                        <i class="bi bi-person-x display-4 text-muted mb-3"></i>
                                        <h5>Tidak ada pengguna</h5>
                                        <p>Mulai dengan menambahkan pengguna pertama</p>
                                        <a href="<?= base_url('users/create'); ?>" class="btn btn-primary">
                                            <i class="bi bi-plus-circle me-1"></i>
                                            Tambah Pengguna
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

   

<!-- Search and Delete Scripts -->
<script>
// Search functionality
document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
    const tableRows = document.querySelectorAll('tbody tr');
    
    tableRows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchValue) ? '' : 'none';
    });
});

// Delete confirmation
function confirmDelete(userId, userName) {
    document.getElementById('userName').textContent = userName;
    document.getElementById('confirmDeleteBtn').href = '<?= base_url('users/delete/'); ?>' + userId;
    
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}
</script>

<?php
$this->endSection();
?>