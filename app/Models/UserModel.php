<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email','full_name', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getUser($id = null)
    {
        if ($id) {
            return $this->asArray()->where(['id' => $id])->first();
        }
        return $this->findAll();
    }

    public function createUser($data)
    {
        return $this->insert($data);
    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($id);
    }
}