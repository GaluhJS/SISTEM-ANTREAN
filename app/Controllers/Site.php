<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function login()
    {
        $data = [
            'title' => "Login",
            'name_sistem' => 'SISTEM ANTREAN'
        ];

        return view('site/login', $data);
    }

    public function dashboard()
    {
        return view('layouts/app');
    }
}
