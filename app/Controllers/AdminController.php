<?php

namespace App\Controllers;

// use App\Models\AdminModel;
use App\Models\CustomerModel;

class AdminController extends BaseController{
    //Admin credenials are static(for now) hence stored in variables..
    public function adminLogin(){
        $adminEmail = 'admin@dukakuu.com';
        $adminPassword = 'coderiters_123';

        // $adminModel = new AdminModel();
        if($this->request->getMethod==='post'){
            if($this->request->getPost('email') === $adminEmail && $this->request->getPost('password') === $adminPassword){
                return redirect()->to('home/admin');
            }
            else{
                return redirect()->to('home/login');
            }
        }
    }
}