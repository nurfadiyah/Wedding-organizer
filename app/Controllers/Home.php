<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function generate(): string
    {
        echo password_hash('12345',PASSWORD_BCRYPT);
    }
}
