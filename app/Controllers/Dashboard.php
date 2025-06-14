<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;

class Dashboard extends BaseController
{
    protected $userModel;
    protected $productModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'totalUsers' => $this->userModel->countAll(),
            'totalProducts' => $this->productModel->countAll(),
            'recentUsers' => $this->userModel->orderBy('created_at', 'DESC')->limit(5)->findAll(),
            'recentProducts' => $this->productModel->orderBy('created_at', 'DESC')->limit(5)->findAll()
        ];

        return view('dashboard/index', $data);
    }
}