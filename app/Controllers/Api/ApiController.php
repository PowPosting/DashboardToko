<?php

namespace App\Controllers\Api;

use App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController
{
    protected $productModel;
    protected $format = 'json';

    public function __construct()
    {
        $this->productModel = new ProductModel();
        header('Content-Type: application/json');
    }

    public function getProducts()
    {
        try {
            $products = $this->productModel->findAll();
            return $this->respond([
                'status' => 'success',
                'data' => $products
            ]);
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
    }

    public function getProduct($id = null)
    {
        try {
            $product = $this->productModel->find($id);
            if ($product) {
                return $this->respond([
                    'status' => 'success',
                    'data' => $product
                ]);
            }
            return $this->failNotFound('Product not found');
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
    }

    public function createProduct()
    {
        try {
            $data = $this->request->getJSON(true) ?: $this->request->getPost();
            
            if (empty($data)) {
                return $this->fail('No data provided');
            }

            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required|min_length[3]',
                'price' => 'required|numeric',
                'description' => 'required',
                'stock' => 'required|integer',
                'category_id' => 'required|integer',
                'status' => 'required|in_list[active,inactive]'
            ]);

            if (!$validation->run($data)) {
                return $this->failValidationErrors($validation->getErrors());
            }

            $id = $this->productModel->insert($data);
            return $this->respondCreated([
                'status' => 'success',
                'message' => 'Product created successfully',
                'data' => array_merge($data, ['id' => $id])
            ]);
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
    }

    public function updateProduct($id = null)
    {
        try {
            $data = $this->request->getJSON(true) ?: $this->request->getRawInput();
            
            if (empty($data)) {
                return $this->fail('No data provided');
            }

            $existing = $this->productModel->find($id);
            if (!$existing) {
                return $this->failNotFound('Product not found');
            }

            $this->productModel->update($id, $data);
            return $this->respond([
                'status' => 'success',
                'message' => 'Product updated successfully',
                'data' => array_merge($existing, $data)
            ]);
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
    }

    public function deleteProduct($id = null)
    {
        try {
            $existing = $this->productModel->find($id);
            if (!$existing) {
                return $this->failNotFound('Product not found');
            }

            $this->productModel->delete($id);
            return $this->respond([
                'status' => 'success',
                'message' => 'Product deleted successfully',
                'data' => ['id' => $id]
            ]);
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
    }
}