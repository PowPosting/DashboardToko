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
        // Get total counts
        $totalUsers = $this->userModel->countAllResults();
        $totalProducts = $this->productModel->countAllResults();

        // Get recent users (last 5)
        $recentUsers = $this->userModel
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->findAll();

        // Get recent products (last 5)
        $recentProducts = $this->productModel
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->findAll();

        $data = [
            'title' => 'Dashboard',
            'totalUsers' => $totalUsers,
            'totalProducts' => $totalProducts,
            'recentUsers' => $recentUsers,
            'recentProducts' => $recentProducts
        ];

        return view('dashboard/index', $data);
    }
}