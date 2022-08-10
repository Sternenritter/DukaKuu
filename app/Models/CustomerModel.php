<?php namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model {
    protected $table = 'customers';
    protected $allowedFields = ['username', 'first_name', 'last_name', 'email', 'password', 'is_deleted'];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert (array $data)
    {
        $data = $this->passwordHash($data);
        
        
    }

    protected function beforeUpdate (array $data)
    {
        $data = $this->passwordHash($data);
    }

    protected function passwordHash (array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        
        return $data;
    }
}