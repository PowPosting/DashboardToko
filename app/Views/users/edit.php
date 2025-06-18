<?php
// This file is for editing user information
?>

<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="container py-4">
    <!-- Header -->
    <div class="mb-4">
        <h2>Edit Admin</h2>
        <p class="text-muted">Perbarui informasi admin</p>
    </div>

    <!-- Form -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Informasi Admin</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('users/update/' . $user['id']) ?>" method="post">
                        <?= csrf_field() ?>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" 
                                       value="<?= esc($user['username']) ?>" 
                                       placeholder="Masukkan username" required>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       value="<?= esc($user['email']) ?>"
                                       placeholder="Masukkan alamat email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="password" name="password" 
                                       placeholder="Kosongkan jika tidak ingin mengubah password">
                                <div class="form-text">Kosongkan jika tidak ingin mengubah</div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" 
                                       placeholder="Konfirmasi password baru">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="full_name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" 
                                       value="<?= esc($user['full_name'] ?? '') ?>"
                                       placeholder="Masukkan nama lengkap">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="role" class="form-label">Peran</label>
                                <select class="form-select" id="role" name="role" readonly>
                                    <option value="admin" selected>Admin</option>
                                </select>
                            </div>
                        </div>


                        <hr class="my-4">

                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url('users'); ?>" class="btn btn-secondary">
                                <i class="bi bi-arrow-left me-1"></i>
                                Kembali
                            </a>
                            <div>
                                <button type="reset" class="btn btn-outline-warning me-2">
                                    <i class="bi bi-arrow-clockwise me-1"></i>
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-pencil me-1"></i>
                                    Perbarui Admin
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
        if (password.value && password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity("Password tidak cocok");
        } else {
            confirmPassword.setCustomValidity('');
        }
    }

    password.addEventListener('change', validatePassword);
    confirmPassword.addEventListener('keyup', validatePassword);
});
</script>

<?= $this->endSection() ?>

