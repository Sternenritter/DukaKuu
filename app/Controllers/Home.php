<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('UI/landing.php');
    }
    public function register()
    {
        return view('UI/registration.php');
    }
    public function store()
    {
        return view('UI/store.php');
    }
    public function cart()
    {
        return view('UI/cart.php');
    }
    public function profile()
    {
        return view('UI/profile.php');
    }
    public function admin()
    {
        return view('ADMIN/admin.php');
    }
}
