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
              'email' => 'required|min_length[6]|max_length[50]',
              'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
        ];

        $errors = [
          'password' => [ 'validateUser' => 'Email or Password is incorrect']
        ];

        if (!$this->validate($rules, $errors)) {
          $errors = $this->validator->getErrors();
          return $this->response->setJSON(['errors' => $errors, 'status' => 0]);
        } else {          
          try {
            $model = new CustomerModel();
            $user = $model->where('email', $this->request->getVar('email'))->first();
            $this->setUserSession($user);
          } catch (\Throwable $th) {
            echo $th;
          }
                
        }
      }
      return $this->response->setJSON(['message' => 'logged in successfully', 'status' => 1]);
  }

  public function setUserSession($user) {
    $array = [
      'user_id' => $user['user_id'],
      'first_name' => $user['first_name'],
      'last_name' => $user['last_name'],
      'email' => $user['email'],
      'isLoggedIn' => true
    ];

    $session = session();
    $session->set($array);
    return true;
  }
}
 