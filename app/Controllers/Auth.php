<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        return redirect()->to(site_url('/login'));
    }
    public function login(): string
    {
        return view('auth/login');
    }
    public function loginProcess(): string
    {
        echo "lanjut login";
    }
}