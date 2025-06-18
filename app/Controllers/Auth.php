<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        // Jika sudah login, redirect ke dashboard
        if (session()->get('loggedIn')) {
            return redirect()->to('/dashboard');
        }
        
        return view('auth/login');
    }

    public function authenticate()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input
        if (empty($username) || empty($password)) {
            return redirect()->to('/auth/login')->with('error', 'Username dan password harus diisi');
        }

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            session()->set([
                'loggedIn' => true,
                'userId' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'] ?? '',
                'role' => $user['role'] ?? 'user'
            ]);
            
            // Redirect ke dashboard
            return redirect()->to('/dashboard')->with('success', 'Login berhasil!');
        } else {
            return redirect()->to('/auth/login')->with('error', 'Username atau password salah');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login')->with('success', 'Logout berhasil');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerUser()
    {
        $model = new UserModel();
        
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'full_name' => $this->request->getPost('full_name'),
        ];

        if ($model->save($data)) {
            return redirect()->to('/auth/login')->with('success', 'Registrasi berhasil, silakan login');
        } else {
            return redirect()->to('/auth/register')->with('error', 'Registrasi gagal');
        }
    }
}