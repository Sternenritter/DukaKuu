<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerController extends BaseController
{

    public function registerCustomer() {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]|is_unique[customers.username]',
                'first_name' => 'required|min_length[3]|max_length[20]',
                'last_name' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|is_unique[customers.email]',
                'password' => 'required|min_length[8]|max_length[255]',
          ];

          if (!$this->validate($rules)) {
            $errors = $this->validator->getErrors();
            return $this->response->setJSON(['errors' => $errors, 'status' => 0]);
          } else {
            $customerData = [
              'username' => $this->request->getVar('username'),
              'first_name' => $this->request->getVar('first_name'),
              'last_name' => $this->request->getVar('last_name'),
              'email' => $this->request->getVar('email'),
              'password' => $this->request->getVar('password'),
            ];
            
            $model = new CustomerModel();
            try {
              $model->save($customerData);
            } catch (\Throwable $th) {
              echo $th;
            }
                  
          }
        }
        return $this->response->setJSON(['message' => 'user added successfully', 'status' => 1]);
    }

    public function login() {
      if ($this->request->getMethod() == 'post') {
          $rules = [
              'username' => 'required|min_length[3]|max_length[20]|is_unique[customers.username]',
              'first_name' => 'required|min_length[3]|max_length[20]',
              'last_name' => 'required|min_length[3]|max_length[20]',
              'email' => 'required|min_length[6]|max_length[50]|is_unique[customers.email]',
              'password' => 'required|min_length[8]|max_length[255]',
        ];

        if (!$this->validate($rules)) {
          $errors = $this->validator->getErrors();
          return $this->response->setJSON(['errors' => $errors, 'status' => 0]);
        } else {
          $customerData = [
            'username' => $this->request->getVar('username'),
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
          ];
          
          $model = new CustomerModel();
          try {
            $model->save($customerData);
          } catch (\Throwable $th) {
            echo $th;
          }
                
        }
      }
      return $this->response->setJSON(['message' => 'user added successfully', 'status' => 1]);
  }
}
 