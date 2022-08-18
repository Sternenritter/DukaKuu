<?php

namespace App\Controllers;

// use App\Models\AdminModel;
use App\Models\CustomerModel;
use App\Models\ItemsModel;

class AdminController extends BaseController{
    //Admin credenials are static(for now) hence stored in variables..
    public function adminLogin(){
        $adminEmail = 'admin@dukakuu.com';
        $adminPassword = 'coderiters_123';

        // $adminModel = new AdminModel();
        if($this->request->getMethod==='post'){
            if($this->request->getPost('user-email') === $adminEmail && $this->request->getPost('user-password') === $adminPassword){
                return redirect()->to('home/admin');
            }
            else{
                return redirect()->to('home/index');
            }
        }
    }
}