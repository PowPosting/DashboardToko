<?php
$this->extend('templates/header');

$this->section('content');
?>

<div class="container py-4">
    <!-- Header -->
    <div class="mb-4">
        <h2>Tambah Pengguna Baru</h2>
        <p class="text-muted">Tambahkan pengguna baru ke sistem</p>
    </div>

    <!-- Form -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Informasi Pengguna</h5>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('users/store') ?>" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" 
                                       placeholder="Masukkan username" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       placeholder="Masukkan alamat email" required>
                              
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" 
                                       placeholder="Masukkan password" required>
                                <div class="form-text">Minimal 6 karakter</div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-conssstrol" id="confirm_password" name="confirm_password" 
                                       placeholder="Konfirmasi password" required>
                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="role" class="form-label">Peran</label>
                                <select class="form-select" id="role" name="role">
                                    <option value="user">Pengguna</option>
                                    <option value="admin">Admin</option>
                                    <option value="moderator">Moderator</option>
                                </select>
                                
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="active">Aktif</option>
                                    <option value="inactive">Tidak Aktif</option>
                                    <option value="pending">Menunggu</option>
                                </select>
                  
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="full_name" class="form-label">Nama Lengkap (Opsional)</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" 
                                   placeholder="Masukkan nama lengkap">
                        </div>
                        <hr class="my-4">
                        <div class="d-flex justify-content-between">
                            <a href="<?= site_url('users'); ?>" class="btn btn-secondary">
                                Kembali
                            </a>
                            <div>
                                <button type="reset" class="btn btn-outline-warning me-2">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-success">
                                    Simpan Pengguna
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form Validation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');

    function validatePassword() {
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity("Password tidak cocok");
        } else {
            confirmPassword.setCustomValidity('');
        }
    }

    password.addEventListener('change', validatePassword);
    confirmPassword.addEventListener('keyup', validatePassword);
});
</script>

<?php
$this->endSection();
?>