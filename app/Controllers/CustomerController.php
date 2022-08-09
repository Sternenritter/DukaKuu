<?php

namespace App\Controllers;

class CustomerController extends BaseController
{
    public function register()
    {
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[100]|is_unique[customers.username]',
                'first_name' => 'required|min_length[3]|max_length[100]',
                'last_name' => 'required|min_length[3]|max_length[100]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[customers.email]',
                'password' => 'required|min_length[8]|max_length[255]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                // Store user in DB
            }
        }

        return view('UI/registration.php', $data);
    }
}
