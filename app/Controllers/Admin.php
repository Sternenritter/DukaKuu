<?php

namespace App\Controllers;

class Admin extends BaseController
{
    //No need for registeration as long as admin credentials are static.
    
    public function login()
    {
        return view('UI/login.php');
    }
}

//This page is not yet useful, as admin functionalities are still at preliminary stages, so don't call it in any admin related controllers fo rthe time-being.