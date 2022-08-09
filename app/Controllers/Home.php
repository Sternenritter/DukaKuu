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
}
