<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price', 'stock'];
    protected $returnType = 'array';
    protected $useTimestamps = true;

    public function getProducts()
    {
        return $this->findAll();
    }

    public function getProduct($id)
    {
        return $this->find($id);
    }

    public function createProduct($data)
    {
        return $this->insert($data);
    }

    public function updateProduct($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteProduct($id)
    {
        return $this->delete($id);
    }
}