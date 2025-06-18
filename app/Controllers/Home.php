<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index()
    {
        // Jika sudah login, redirect ke dashboard
        if (session()->get('loggedIn')) {
            return redirect()->to('/dashboard');
        }
        
        // Jika belum login, redirect ke login page
        return redirect()->to('/auth/login');
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        
        return view('about', $data);
    }
}