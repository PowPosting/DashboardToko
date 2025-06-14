<?php

namespace App\Controllers\Api;

use App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function getProducts()
    {
        $products = $this->productModel->findAll();
        return $this->respond($products);
    }

    public function getProduct($id = null)
    {
        $product = $this->productModel->find($id);
        if ($product) {
            return $this->respond($product);
        }
        return $this->failNotFound('Product not found');
    }

    public function createProduct()
    {
        $data = $this->request->getPost();
        $this->productModel->insert($data);
        return $this->respondCreated($data);
    }

    public function updateProduct($id = null)
    {
        $data = $this->request->getRawInput();
        $this->productModel->update($id, $data);
        return $this->respondUpdated($data);
    }

    public function deleteProduct($id = null)
    {
        $this->productModel->delete($id);
        return $this->respondDeleted(['id' => $id]);
    }
}