<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('products/index', $data);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store()
    {
        $this->productModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock') ?? 0,
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status') ?? 'active',
        ]);
        return redirect()->to('/products');
    }

    public function edit($id)
    {
        $data['product'] = $this->productModel->find($id);
        return view('products/edit', $data);
    }

    public function update($id)
    {
        $this->productModel->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock') ?? 0,
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status') ?? 'active'
        ]);
        return redirect()->to('/products');
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/products');
    }
}