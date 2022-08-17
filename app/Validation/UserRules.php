<?php

namespace App\Validation;
use App\Models\CustomerModel;

class UserRules {
    public function validateUser(string $str, string $fields, array $data) {
        $model = new CustomerModel();
    
        $user = $model->where('email', $data['email'])->first();

        if (!$user)
            return false;

        return password_verify($data['password'], $user['password']);
    }
}